/// Frohe Weihnachten wuenscht buero digitale
/// René Teinze, r.teinze@buero-digitale.de
/// http://www.buero-digitale.de
/// LICENSE: free, but Email would be nice, if you use it
/// LIZENZ: frei, aber Email waere nett, wenn du es benutzt

BD_snow= (function(){
	var $this= this;
	
	$this.oConf= {
		 graphic: false
		,altsymbol: '*'
		,altsymbolcolor: '#dddddd'
		,altsymbolsize: 24
		,amplitude: 15
		,interval: 2
		,speed: 30
		,snowontop: true
	}

	var __construct= function(){
		if(!docloaded()){
			setTimeout(__construct, 2000);
			return false;
		}

		for(var $s1 in $this.config){
			$this.oConf[$s1]= $this.config[$s1];
		}
		
		if($this.oConf.graphic){
			$oIm= new Image();
			$oIm.src= $this.oConf.graphic;
			$oIm.onerror= function(){$this.oConf.graphic=false;}
		}
		if($this.oConf.graphic){
			$this.iImgW= (($oIm.width>0)?($oIm.width):(50));
			$this.iImgH= (($oIm.height>0)?($oIm.height):(50));
		}
		else{
			$this.iImgH= $this.oConf.altsymbolsize;
		}
	
		$this.iDocW = window.innerWidth || (window.document.documentElement.clientWidth || window.document.body.clientWidth);
		$this.iDocH = window.innerHeight || (window.document.documentElement.clientHeight || window.document.body.clientHeight);
		var $oE_Body= document.getElementsByTagName('body')[0];

		$this.oE_frame= document.createElement('div');
		$this.oE_frame.style.position= 'fixed';
		$this.oE_frame.style.width= $this.iDocW+'px';
		$this.oE_frame.style.height= $this.iDocH+'px';
		$this.oE_frame.style.left= '0px';
		$this.oE_frame.style.top= '0px';
		$this.oE_frame.style.overflow= 'hidden';
		$this.oE_frame.style.background= 'transparent';
		$this.oE_frame.style.zIndex= (($this.oConf.snowontop)?(1000):(-1));
		if($this.oConf.snowontop){
			$this.oE_frame= $oE_Body;
		}
		else{
			$oE_Body.insertBefore($this.oE_frame, $oE_Body.firstChild);
		}
		
		createFlocke();
	}
	
	var docloaded= function(){
		if(
			document.getElementsByTagName('body')[0]
			&&
			(window.innerWidth || (window.document.documentElement.clientWidth || window.document.body.clientWidth))
			&&
			(window.innerHeight || (window.document.documentElement.clientHeight || window.document.body.clientHeight))
		){
			return true;
		}
		return false;
	}//docloaded
	
	var Flocke= function($parent){
		var $this= this;
		var $iDx, $iPosX, $iPosY;    // coordinate and position variables
		var $iAmp, $iStepX, $iStepY;  // amplitude and step variables
		var $oE_Flocke;
		var $oInterval;
		var $iOpacity;
		
		var __construct= function(){
			$iDx = 0; 
			$iPosX = parseInt(Math.random()*($parent.iDocW-50));
			$iPosY = -30;
			$iAmp = Math.random()*$parent.oConf.amplitude;
			$iStepX = 0.02 + Math.random()/10;
			$iStepY = 0.7 + Math.random();
			$iOpacity= 100;

			$oE_Flocke= document.createElement('div');
			$oE_Flocke.style.position= 'absolute';
			$oE_Flocke.style.top= $iPosY+'px';
			$oE_Flocke.style.left= $iPosX+'px';
			if($parent.oConf.graphic){
				$oE_Flocke.style.width= $parent.iImgW+'px';
				$oE_Flocke.style.height= $parent.iImgW+'px';
				$oE_Flocke.style.backgroundRepeat= 'no-repeat';
				$oE_Flocke.style.backgroundImage= 'url('+$parent.oConf.graphic+')';
			}
			else{
				$oE_Flocke.appendChild(document.createTextNode($parent.oConf.altsymbol));
				$oE_Flocke.style.color= $parent.oConf.altsymbolcolor;
				$oE_Flocke.style.fontSize= $parent.oConf.altsymbolsize+'px';
			}
			$parent.oE_frame.appendChild($oE_Flocke);
			
			$oInterval= setInterval(letItSnow, $parent.oConf.speed);
		}
		
		var hide= function(){
			$oE_Flocke.style.filter = 'Alpha(opacity=' + ($iOpacity) + ')';
			$oE_Flocke.style.MozOpacity = $iOpacity/100;
			$oE_Flocke.style.opacity = $iOpacity/100;

			return ($iOpacity-=2);
		}
		
		var letItSnow= function(){
			$iPosY += $iStepY;
			if ($iPosY > $parent.oE_frame.scrollTop+$parent.iDocH-($iStepY*100/2+$parent.iImgH)) {
				if(hide()<=0){
					clearInterval($oInterval);
					$parent.oE_frame.removeChild($oE_Flocke);
				}
			}
			$iDx += $iStepX;
			$oE_Flocke.style.left = parseInt($iPosX + $iAmp*Math.sin($iDx))  + "px";
			$oE_Flocke.style.top = parseInt($iPosY) + "px";
		}
						
		__construct();
	}// Flocke

	var createFlocke= function(){
		new Flocke($this);
		// time to next Flocke
		var $iSpan= $this.oConf.interval/3;
		var $iRand= Math.random()*($iSpan);
		$iRand= parseInt($this.oConf.interval + ($iSpan/2-$iRand))*1000;
		setTimeout(createFlocke, $iRand);
	}
	
	__construct();
	
	return $this;
}// Schnee
)();
