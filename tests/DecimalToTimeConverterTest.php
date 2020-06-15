<?php declare(strict_types=1);

use BNW\Converter\DecimalToTime;
use PHPUnit\Framework\TestCase;

final class DecimalToTimeConverterTest extends TestCase
{
    public function testConvertDecialToMinute() : void
    {
        $converter = new DecimalToTime();

        $this->assertEquals('00:01', $converter->convert(0.01) );
        $this->assertEquals('00:01', $converter->convert(0.02) );
        $this->assertEquals('00:02', $converter->convert(0.03) );
        $this->assertEquals('00:03', $converter->convert(0.05) );
        $this->assertEquals('00:04', $converter->convert(0.07) );
        $this->assertEquals('00:05', $converter->convert(0.08) );
        $this->assertEquals('00:06', $converter->convert(0.1) );
        $this->assertEquals('00:07', $converter->convert(0.12) );
        $this->assertEquals('00:08', $converter->convert(0.13) );
        $this->assertEquals('00:09', $converter->convert(0.15) );
        $this->assertEquals('00:10', $converter->convert(0.17) );
        $this->assertEquals('00:11', $converter->convert(0.18) );
        $this->assertEquals('00:12', $converter->convert(0.2) );
        $this->assertEquals('00:13', $converter->convert(0.22) );
        $this->assertEquals('00:14', $converter->convert(0.23) );
        $this->assertEquals('00:15', $converter->convert(0.25) );
        $this->assertEquals('00:16', $converter->convert(0.27) );
        $this->assertEquals('00:17', $converter->convert(0.28) );
        $this->assertEquals('00:18', $converter->convert(0.3) );
        $this->assertEquals('00:19', $converter->convert(0.32) );
        $this->assertEquals('00:20', $converter->convert(0.33) );
        $this->assertEquals('00:21', $converter->convert(0.35) );
        $this->assertEquals('00:22', $converter->convert(0.37) );
        $this->assertEquals('00:23', $converter->convert(0.38) );
        $this->assertEquals('00:24', $converter->convert(0.4) );
        $this->assertEquals('00:25', $converter->convert(0.42) );
        $this->assertEquals('00:26', $converter->convert(0.43) );
        $this->assertEquals('00:27', $converter->convert(0.45) );
        $this->assertEquals('00:28', $converter->convert(0.47) );
        $this->assertEquals('00:29', $converter->convert(0.48) );
        $this->assertEquals('00:30', $converter->convert(0.5) );
        $this->assertEquals('00:31', $converter->convert(0.52) );
        $this->assertEquals('00:32', $converter->convert(0.53) );
        $this->assertEquals('00:33', $converter->convert(0.55) );
        $this->assertEquals('00:34', $converter->convert(0.57) );
        $this->assertEquals('00:35', $converter->convert(0.58) );
        $this->assertEquals('00:36', $converter->convert(0.6) );
        $this->assertEquals('00:37', $converter->convert(0.62) );
        $this->assertEquals('00:38', $converter->convert(0.63) );
        $this->assertEquals('00:39', $converter->convert(0.65) );
        $this->assertEquals('00:40', $converter->convert(0.67) );
        $this->assertEquals('00:41', $converter->convert(0.68) );
        $this->assertEquals('00:42', $converter->convert(0.7) );
        $this->assertEquals('00:43', $converter->convert(0.72) );
        $this->assertEquals('00:44', $converter->convert(0.73) );
        $this->assertEquals('00:45', $converter->convert(0.75) );
        $this->assertEquals('00:46', $converter->convert(0.77) );
        $this->assertEquals('00:47', $converter->convert(0.78) );
        $this->assertEquals('00:48', $converter->convert(0.8) );
        $this->assertEquals('00:49', $converter->convert(0.82) );
        $this->assertEquals('00:50', $converter->convert(0.83) );
        $this->assertEquals('00:51', $converter->convert(0.85) );
        $this->assertEquals('00:52', $converter->convert(0.87) );
        $this->assertEquals('00:53', $converter->convert(0.88) );
        $this->assertEquals('00:54', $converter->convert(0.9) );
        $this->assertEquals('00:55', $converter->convert(0.92) );
        $this->assertEquals('00:56', $converter->convert(0.93) );
        $this->assertEquals('00:57', $converter->convert(0.95) );
        $this->assertEquals('00:58', $converter->convert(0.97) );
        $this->assertEquals('00:59', $converter->convert(0.98) );
        $this->assertEquals('00:59', $converter->convert(0.99) );
    }

    public function testConvertDecialToHour() : void
    {
        $converter = new DecimalToTime();

        $this->assertEquals('01:00', $converter->convert(1.0) );
        $this->assertEquals('10:00', $converter->convert(10.0) );
        $this->assertEquals('23:00', $converter->convert(23.0) );
        $this->assertEquals('35:00', $converter->convert(35.0) );
        $this->assertEquals('999:00', $converter->convert(999.0) );
        $this->assertEquals('99999:00', $converter->convert(99999.0) );
    }

    public function testConvertDecialToHourAndMinutes() : void
    {
        $converter = new DecimalToTime();

        $this->assertEquals('01:30', $converter->convert(1.5) );
        $this->assertEquals('01:05', $converter->convert(1.08) );
        $this->assertEquals('01:10', $converter->convert(1.17) );
        $this->assertEquals('01:25', $converter->convert(1.42) );
        $this->assertEquals('01:50', $converter->convert(1.83) );
        $this->assertEquals('01:01', $converter->convert(1.02) );
        $this->assertEquals('10:27', $converter->convert(10.45) );
        $this->assertEquals('35:42', $converter->convert(35.70) );
        $this->assertEquals('999:55', $converter->convert(999.92) );
        $this->assertEquals('99999:07', $converter->convert(99999.12) );
    }

    public function testErrorConvert() : void
    {
        $converter = new DecimalToTime();

        $this->expectException(TypeError::class);
        $this->assertEquals('01:00', $converter->convert('1.0') );
    }
}
