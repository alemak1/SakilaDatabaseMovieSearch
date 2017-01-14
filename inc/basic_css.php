
			<style>
				/** 
					font-family: 'Bungee', cursive;
					font-family: 'Abril Fatface', cursive;
					font-family: 'Rokkitt', serif;
					font-family: 'Josefin Slab', serif;
					font-family: 'Acme', sans-serif;

				**/
				*{
					box-sizing: border-box;
				}
				
				header{
					display:block;
					height: 5em;
					width: 100%;
					background-color: #128781;
					margin-bottom: 2em;

				}

				.welcome-message{
					float:left;
					display: inline-block;
					font-family: 'Rokkitt', serif;
					font-size: 1em;


				}

				.header-btn-set{
					float:right;
					display: inline-block;
					border-radius: 5%;
					margin-top: 1.7em;
					font-size: 0.8em;


				}

				

				a{
					text-decoration: none;
					color: rgba(38,35,140,1);
				}

				ol,ul{
					list-style-type: none;
				}

				body{
					background-color: rgba(244,203,66,1);
				}

				.container{
					width: 90%;
					margin: 0 auto;
				}


				.on{ display: block;}
				.off{display: none;}

				.col{
					width:45%;
				} 
			
				.col-primary{ 
					float:left;
					display: inline-block;
					
				} 
						
				.col-secondary{ 
					float:right;
					display: inline-block;
					color: #8a8afc;


					border-color: black;
					border-style: solid;
					border-width: 3px;
					border-radius: 2%;
					background-color: #fcdb79;
					padding:2em;

					font-family: 'Rokkitt', serif;

					
				} 

				::-webkit-scrollbar {
    			-webkit-appearance: none;
    			width: 7px;
				}
				::-webkit-scrollbar-thumb {
    			border-radius: 4px;
    			background-color: rgba(0,0,0,.5);
    			-webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
				}
				
				#film-list{
					margin: 0 auto;
					max-height: 25em;
					overflow: scroll; 

					background-color: #fcdb79;

					border-color: black;
					border-style: solid;
					border-width: 3px;
					border-radius: 2%;

					padding-top: .5em;
					padding-bottom: .5em;
					font-family: 'Abril Fatface', cursive;


				}

				#film-details{
					margin: 0 auto;
					display: inline-block;
					
					margin-left: 2em;


				}

				@media screen and (max-width: 700px){
					
					
				}



</style>