<?php
use DavidePastore\Ipinfo\Ipinfo;
use DavidePastore\Ipinfo\Host;

/**
 * Test for the Ipinfo class.
 * @author davidepastore
 *
 */
class IpinfoTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 * Test full ip details.
	 */
	public function testGetFullIpDetails(){
		$ipinfo = new Ipinfo();
		$expected = new Host(array(
			"city"		=>	"Mountain View",
			"country"	=>	"US",
			"hostname"	=>	"google-public-dns-a.google.com",
			"ip"		=>	"8.8.8.8",
			"loc"		=>	"37.3860,-122.0838",
			"org"		=>	"AS15169 Google Inc.",
			"phone"		=>	"",
			"region"	=>	"California"
		));
		$actual = $ipinfo->getFullIpDetails("8.8.8.8");
		
		$this->assertEquals($expected, $actual);
	}
	
	/**
	 * Test city field value.
	 */
	public function testGetSpecificField(){
		$ipinfo = new Ipinfo();
		$expected = "Mountain View";
		$actual = $ipinfo->getSpecificField("8.8.8.8", Ipinfo::CITY);
	
		$this->assertEquals($expected, $actual);
	}
}