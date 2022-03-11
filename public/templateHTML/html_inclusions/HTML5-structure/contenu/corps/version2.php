<div id="barre-lecture"><div class="progression"></div></div>
<style>
#barre-lecture {position:fixed; top:0; height:1px; width:100%; background:#fff; z-index:100;}
#barre-lecture .progression {background:#ddd; width:0%; height:100%; transition:width 0.3s;}
</style>
<div id='corps' class='corps'>

		<a name="corpsPage" href="#"></a>
		
		<div style='display:table; width:100%;'>
		<div id='contenu' class='contenu'>

            <?php
                include dirname(__DIR__) . '/add-ons/entertainement_adsense.phtml';
            ?>

	    <?php $debut_pic_memoire = memory_get_peak_usage();?>
		
		<?php
        if($this->page == "Dossiers" || $this->page == "DossierAncien" || $this->page == "listeDossiers"){
		/*
		 ?>
		<div id='AMAZING_BG_Effect' class='imagebd' style='background-color: none; width:100%; height:45%;'>
		
		<!-- Follow http://threejs.org/ -->
<?php ChargementAsyncroneScript_ECMA( 
<<<EOD
		<script src="/scriptJS/three/three.min.js"></script>

		<script src="/scriptJS/three/controls/TrackballControls.js"></script>
		<script src="/scriptJS/three/effects/AsciiEffect.js"></script>

		<script src="/scriptJS/three/renderers/Projector.js"></script>
		<script src="/scriptJS/three/renderers/CanvasRenderer.js"></script>

		<script src="/scriptJS/three/fonts/helvetiker_regular.typeface.js"></script>

		<script src="/scriptJS/three/libs/stats.min.js"></script>

		<script>

			var container, stats;

			var camera, controls, scene, renderer;

			var sphere, plane;

			var start = Date.now();

			init();
			animate();

			function init() {

				var width = window.innerWidth*0.9 || 2;
				var height = window.innerHeight*0.9 || 2;
				
				
				
				container = document.createElement( 'div' );
				document.getElementById('AMAZING_BG_Effect').appendChild( container );

				//var info = document.createElement( 'div' );
				//info.style.position = 'absolute';
				//info.style.top = '10px';
				//info.style.width = '100%';
				//info.style.textAlign = 'center';
				//info.innerHTML = 'Drag to change the view';
				//container.appendChild( info );

				camera = new THREE.PerspectiveCamera( 70, width / height, 1, 1000 );
				camera.position.y = 150;
				camera.position.z = 500;

				//controls = new THREE.TrackballControls( camera );

				scene = new THREE.Scene();

				var light = new THREE.PointLight( 0xffffff );
				light.position.set( 500, 500, 500 );
				scene.add( light );

				var light = new THREE.PointLight( 0xffffff, 0.25 );
				light.position.set( - 500, - 500, - 500 );
				scene.add( light );
				
				var labelB25 = new THREE.TextGeometry( 'B25', {
								size: '150',
								height: '75',
								font: 'helvetiker'
							});

				material = new THREE.MeshLambertMaterial( { shading: THREE.FlatShading } );

				b25 = new THREE.Mesh( 
					labelB25,
					material
					);
				
				b25.position.x = - 100;
				b25.position.y = 0;
				
				scene.add( b25 );

				//over skate-board
				
				tail = new THREE.Mesh (
					new THREE.CylinderGeometry( 100 , 100 , 2 , 8 , 8 , false , Math.PI, Math.PI  ),
					material
					);
				tail.position.x = -250;
				tail.position.y = 15;
				tail.rotation.x = 0.2;
				tail.rotation.z = -0.3;
				
				board = new THREE.Mesh (
					new THREE.BoxGeometry( 500 , 200, 2 , 2 , 2 , 2),
					material
					);
				board.position.x = 0;
				board.position.y = 15;
				board.rotation.x = Math.PI*0.5 + 0.2;
				
				front = new THREE.Mesh (
					 new THREE.CylinderGeometry( 100 , 100 , 2 , 8 , 8 , false , 0 , Math.PI, Math.PI ),
					material
					);
				front.position.x = 250;
				front.position.y = 15;
				front.rotation.x = 0.2;
				front.rotation.z = 0.3;
				
				overBack = new THREE.Mesh (
					 new THREE.CylinderGeometry( 80 , 80 , 20 , 8 , 8 , false , 0 , 2*Math.PI ),
					material
					);
				overBack.position.x = -165;
				overBack.position.y = 0;
				overBack.rotation.x = 0.2;
				overFront = new THREE.Mesh (
					 new THREE.CylinderGeometry( 80 , 80 , 20 , 8 , 8 , false , 0 , 2*Math.PI ),
					material
					);
				overFront.position.x = 165;
				overFront.position.y = 0;
				overFront.rotation.x = 0.2;
				
				overskate = new THREE.Group();
				overskate.add(tail);
				overskate.add(board);
				overskate.add(front);
				overskate.add(overBack);
				overskate.add(overFront);				
				
				scene.add(overskate);
				
				//Jumping sphere

				sphere = new THREE.Mesh( 
						new THREE.SphereGeometry( 100, 8, 4 ), 
						new THREE.MeshLambertMaterial( { shading: THREE.FlatShading } )
					);
				
				sphere.position.x = - 350;
				sphere.position.y = 0;
				
				//var merged = new THREE.Geometry();
				//merged.merge( b25.geometry, b25.matrix );
				//merged.merge( B25sphere.geometry, B25sphere.matrix );

				//var sphere = new THREE.Mesh(merged, material);
					
				scene.add( sphere );

				// Plane

				//plane = new THREE.Mesh( 
				//		new THREE.PlaneBufferGeometry( 400, 400 ),
				//		new THREE.MeshBasicMaterial( { color: 0xe0e0e0 } )
				//	);
				//plane.position.y = - 200;
				//plane.rotation.x = - Math.PI / 2;
				//scene.add( plane );

				renderer = new THREE.CanvasRenderer();
				renderer.setClearColor( 0xf0f0f0 );
				renderer.setSize( width, height );
				//container.appendChild( renderer.domElement );

				effect = new THREE.AsciiEffect( renderer );
				effect.setSize( width, height );
				container.appendChild( effect.domElement );

				//stats = new Stats();
				//stats.domElement.style.position = 'absolute';
				//stats.domElement.style.top = '0px';
				//container.appendChild( stats.domElement );

				//

				window.addEventListener( 'resize', onWindowResize, false );

			}

			function onWindowResize() {

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );
				effect.setSize( window.innerWidth, window.innerHeight );

			}

			//

			function animate() {

				requestAnimationFrame( animate );

				render();
				//stats.update();

			}

			function render() {

				var timer = Date.now() - start;

				b25.rotation.y =  Math.cos( timer * 0.002 ) *  0.7;
				b25.rotation.x = Math.abs( Math.cos( timer * 0.003 ) ) *  0.1;

				sphere.position.y = Math.abs( Math.sin( timer * 0.002 ) ) * 250;
				sphere.rotation.x = timer * 0.0003;
				sphere.rotation.z = timer * 0.0002;

				overskate.rotation.y = timer * 0.0002;
				overskate.position.y = 275 + Math.cos( timer ) * 0.05;
			
				//controls.update();

				effect.render( scene, camera );

			}

		</script>
EOD
    ); ?>
		</div>
		<?php
		*/
        }else{ ?>

		<div class='imagebd' style='background-color: none; width:100%; height:45%;'>
		
		<!-- Cette animation Impressionnante à été créée par Justin Windle en Javascript
				Elle est disponible a l'adresse http://soulwire.co.uk/experiments/recursion-toy/
				All my thanks to Him - Merci! pour tes expérimentations :) !
				Contactez le à l'adresse : justin@soulwire.co.uk <justin@soulwire.co.uk>;
		-->
		<canvas style="position:relative;left:-250px; top:30px;" id="canvas"></canvas>
		
		<?php ChargementAsyncroneScript_ECMA( 
<<<EOD
    <script src="/scriptJS/Recursion-Toy-master/js//JQuery-1.6.2/jquery.min.js"></script>
    <script src="/scriptJS/Recursion-Toy-master/js/lib/DAT.GUI.min.js"></script>
    <script src="/scriptJS/Recursion-Toy-master/js/lib/RAF.js"></script>
    <script src="/scriptJS/Recursion-Toy-master/js/recursion.js"></script>
EOD
		    
		    ); ?>
			
		</div>
		
		<?php } ?>
			<?php

            $notAtable = TRUE;
			/*if( ( ( ( !isset($this->page) || $this->page == 'index') && $interface < 6 ) || (isset($this->page) &&  $this->page == 'preferences') || $interface == 9 || $interface == 11 ) ){
				echo "<div class='permanent-table'>";
				$visibility = TRUE;
				if( (isset($this->page) && $this->page == 'preferences' ) && ( $interface != 9 && $interface != 11 ) ){
						$visibility = FALSE;
					}
				echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:left'>&nbsp;</p>";
				AfficheGueuloir($visibility,'gauche');
				echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:right'>&nbsp;</p>"	
						."</div>";
			}
			
			if( !isset($this->page) || $this->page == 'index' || $this->page == 'preferences' || $interface == 6 || $interface >= 9 ){
				$notAtable = FALSE;
			}else{
				$notAtable = TRUE;
			}*/
			
			echo "<div id='contenu-principal'";
			if(!$notAtable){ echo " class='permanent-table' ";}
			echo ">";


            /**
             * CONTENU DE LA PAGE
             */
            echo "<br /><br />";
                echo $content;
            /**
             * FIN DU CONTENU DE LA PAGE
             */

			echo "</div>";
			
			/*if( (isset($this->page) &&  $this->page == 'preferences') || $interface == 6 || $interface == 10 || $interface == 12 ){
					echo "<div class='permanent-table'";
					$visibility = TRUE;
					if( ( isset($this->page) && $this->page == 'preferences' ) && ( $interface != 6 && $interface != 10 && $interface != 12 ) ){
						$visibility = FALSE;
					}
					echo ">"
							."<p width='10px' bgcolor='#AAAAAA' style='display:block;float:left'>&nbsp;</p>";
					AfficheGueuloir($visibility,'droite');
					echo "<p width='10px' bgcolor='#AAAAAA' style='display:block;float:right'>&nbsp;</p>"	
							."</div>";
				}*/
			
			?>

			<br /><br /><br /><br /><br />
		<?php
		
			AfficheExplications($this->page);
		
		?>
		<br /><br /><br /><br /><br />
				
		</div>
</div>

<div class='block_limiteur_pied' style='position:relative;visibility: hidden; z-index:45; width:100%; height:200px; display:block; overflow:hidden; background-color: #818181'>
	&nbsp;
	<div style='transform: rotate(-2deg);visibility: visible; background-color: rgba(200,200,200,0); background-image: url(../images/FinDePage-1.png); background-position: 0% 100% ; background-repeat: repeat-x; width:150%; position:relative; top: -50px; left:-25%' ><br /><br /><br /><br /><br /><br /></div>
	&nbsp;
</div>



<!-- <div style="position:relative; bottom:0px; margin-bottom:0px; background:url(images/line-up-2.png); width:100%;height:75px; background-color: #818181;" ></div> -->
<div class='hashtags'>
	
			<br /><br />					<br /><br /> 			<br /><br />      								    &nbsp;
			<br />		<br />						<br />			<br />											&nbsp;
			<br /><br />							<br />				<br /><br /> 							&nbsp;
			<br />		<br />				<br />								<br />						&nbsp;
			<br />		<br />			<br />			 						<br />					&nbsp;
			<br />		<br />			<br />			 						<br />					&nbsp;
			<br /><br />					<br /><br /> 			<br /><br />					&nbsp;
			
</div>
<?php $fin_pic_memoire = memory_get_peak_usage();?>
<?php include dirname(__DIR__) . '/plancher/footer_informational.phtml'; ?>
