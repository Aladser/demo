<? namespace Bitrix\Main\UpdateSystem;$GLOBALS['____166779997']= array(base64_decode(''.'YmFzZTY0X2RlY29'.'kZQ'.'=='),base64_decode(''.'dW5zZXJp'.'YWxpemU='),base64_decode('b3B'.'lbnNzbF92'.'ZXJpZnk='),base64_decode('dW5zZ'.'XJ'.'pYWxp'.'e'.'mU='));if(!function_exists(__NAMESPACE__.'\\___86124866')){function ___86124866($_2101872157){static $_547189277= false; if($_547189277 == false) $_547189277=array('YWxsb3'.'d'.'l'.'Z'.'F9jbG'.'Fzc2Vz','aW5'.'mbw'.'==','c2ln'.'bm'.'F'.'0d'.'XJl','c2h'.'hM'.'jU2V2l0aFJTQUVuY3J'.'5'.'c'.'H'.'R'.'pb24'.'=','a'.'W5mbw'.'==',''.'Y'.'Wx'.'sb3dlZF9'.'j'.'bGFz'.'c2Vz','R'.'XJyb3IgdmVyaWZ5'.'IG9wZW5zc2wgW0hDU'.'FAwM'.'V0=','LS'.'0'.'tLS'.'1C'.'RU'.'dJ'.'T'.'iBQVUJMSUMg'.'S0'.'VZL'.'S0tLS0KTU'.'lJQklqQU5CZ2t'.'xaGtp'.'Rzl3MEJBUUVGQUFPQ0'.'FROE'.'FNS'.'UlC'.'Q2dLQ'.'0FRRUE'.'2a'.'GN4SXFpaXRVWlJNd1lp'.'dWtTVQpo'.'OXhhNWZFRF'.'lsY'.'2Ni'.'V'.'z'.'N2ajhBdmEzNXZLcV'.'ZON'.'Gl'.'COXR'.'xQ1g'.'3a'.'l'.'U4Nn'.'FBYTJ2MzdtYlRGNnB'.'jWTZI'.'R'.'1'.'BBaFJG'.'CmJ'.'wbn'.'dY'.'T1k3W'.'Ud'.'4Qj'.'FuU0tad'.'kUrak'.'FS'.'YmlMTEJ'.'nWjF'.'jRzZa'.'MG'.'R1dTV'.'pMVh'.'ocElSTD'.'F'.'jTjBIa'.'DVmZXpw'.'alhDNk8KWX'.'hZcTBuVG9'.'I'.'V'.'Gp5UmIxeWN'.'6d3Rta'.'VJ3WXF1ZFh'.'nL'.'3hXe'.'HBw'.'c'.'XdG'.'M'.'H'.'RVbGQzUUJ'.'yM'.'2k2O'.'EI'.'4'.'a'.'n'.'F'.'NbStUamRlQQ'.'p1L2ZnM'.'UowSkd0UjQ'.'veks0'.'Rzd'.'ZSk52aG11'.'aHJ'.'SR'.'2t5QVFW'.'MFRWd'.'T'.'VMRXV'.'nU3hqQXBSbUlKUU5IUU1LMEVoOTN3Ck'.'1ab0ZvUH'.'A'.'5U2dKN0dh'.'R'.'l'.'U4a3p'.'TK0V'.'RY250WXhi'.'MU5IV'.'Up'.'VSXZUZGl1UlVlRktseVRkeE'.'lySDZDTC'.'8v'.'YX'.'BNSDMKRndJREFRQUIKLS'.'0tLS1FTkQ'.'gUF'.'VCT'.'E'.'lD'.'IE'.'tF'.'WS'.'0'.'tL'.'S0'.'t');return base64_decode($_547189277[$_2101872157]);}}; use Bitrix\Main\Application; use Bitrix\Main\Security\Cipher; use Bitrix\Main\Security\SecurityException; class HashCodeParser{ private string $_1164954508; public function __construct(string $_1164954508){ $this->_1164954508= $_1164954508;}  public function parse(){ $_688612265= $GLOBALS['____166779997'][0]($this->_1164954508); $_688612265= $GLOBALS['____166779997'][1]($_688612265,[___86124866(0) => false]); if($GLOBALS['____166779997'][2]($_688612265[___86124866(1)], $_688612265[___86124866(2)], $this->__912349260(), ___86124866(3)) == round(0+0.25+0.25+0.25+0.25)){ $_2003299047= Application::getInstance()->getLicense()->getHashLicenseKey(); $_939996072= new Cipher(); $_1012761442= $_939996072->decrypt($_688612265[___86124866(4)], $_2003299047); return $GLOBALS['____166779997'][3]($_1012761442,[___86124866(5) => false]);} throw new SecurityException(___86124866(6));} private function __912349260(): string{ return ___86124866(7);}}?>