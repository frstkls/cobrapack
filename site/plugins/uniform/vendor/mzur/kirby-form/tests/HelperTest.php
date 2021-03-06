<?php
namespace Jevets\Kirby\Form\Tests;
use v;
class HelperTest extends TestCase
{
    public function testFunction()
    {
        $this->assertTrue(function_exists('csrf_field'));
    }
    public function testCsrfField()
    {
        // the token should not be regenerated during a single request
        $this->assertEquals(csrf_field(), csrf_field());
        $this->assertContains('value="abc"', csrf_field('abc'));
    }
    public function testFilesizeValidator()
    {
        $this->assertTrue(v::filesize(['size' => 9000], 9));
        $this->assertFalse(v::filesize(['size' => 9000], 8));
        $this->assertFalse(v::filesize([], 8));
        $this->assertFalse(v::filesize('asdf', 8));
    }
    public function testMimeValidator()
    {
        // This works without an actual file because the Toolkit guesses the MIME by
        // file extension in this case.
        $this->assertTrue(v::mime(['tmp_name' => 'test.txt'], ['text/plain']));
        $this->assertTrue(v::mime('test.txt', ['text/plain']));
        $this->assertFalse(v::mime('test.txt', ['image/png']));
        // Test handling of non-array argument through invalid().
        $r = invalid(['file' => 'test.txt'], ['file' => ['mime' => ['text/plain']]]);
        $this->assertEquals([], $r);
    }
    public function testImageValidator()
    {
        $path = sys_get_temp_dir().'/kirby_test_image';
        file_put_contents($path, 'sometext');
        $this->assertFalse(v::image($path));
        // This is a GIF: http://probablyprogramming.com/2009/03/15/the-tiniest-gif-ever
        file_put_contents($path, base64_decode('R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='));
        $this->assertTrue(v::image($path));
        unlink($path);
    }
}
