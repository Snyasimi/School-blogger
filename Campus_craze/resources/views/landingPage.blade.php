<!DOCTYPE html>
<html lang="en">
	<head>
		  <meta charset="UTF-8" />
		    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		      <title>Student Blogging App</title>
		        <script src="https://cdn.tailwindcss.com"></script>
	</head>
	<body class="bg-white text-gray-800">

		  <!-- Header -->
		    <header class="shadow-md py-4 px-8 flex justify-between items-center bg-blue-600 text-white">
			        <h1 class="text-2xl font-bold">Campus craze</h1>
				    <nav class="space-x-6">
					          
                        <a href="#features" class="hover:underline">Features</a>
						       
                        <a href="#about" class="hover:underline">About</a>
							    
                        <a href="{{ route('signUpPage') }}" class="bg-white text-blue-600 px-4 py-2 rounded-xl shadow hover:bg-gray-100">Sign Up</a>
							       
                    </nav>
								  
                </header>

								      <!-- Hero -->
								        
                 <section class="flex flex-col items-center justify-center text-center py-24 bg-blue-50 px-4">
										    
                                        
                    <h2 class="text-4xl font-bold mb-4">Write. Express. Inspire.</h2>
										        
                    <p class="text-lg mb-6 max-w-xl">A platform where journalism students turn thoughts into powerful stories and sharpen their writing skills.</p>
											   
                    <a href="{{ route('signUpPage') }}" class="bg-blue-600 text-white px-6 py-3 rounded-xl shadow hover:bg-blue-700 transition">Start Writing Today</a>
											      
                </section>

											        <!-- Features -->
					<section id="features" class="py-20 px-6 max-w-6xl mx-auto">
													      
                        <h3 class="text-3xl font-semibold text-center mb-10">Why BlogSphere?</h3>
													         
                        <div class="grid md:grid-cols-3 gap-8">
															        
                            <div class="p-6 rounded-2xl shadow bg-white">
																	        
                                <h4 class="text-xl font-bold mb-2">Practice Writing</h4>
																		        
                                <p>Improve your writing style and storytelling through regular blog posts.</p>
																			     
                            </div>
																			            
                            <div class="p-6 rounded-2xl shadow bg-white">
																					            
                                <h4 class="text-xl font-bold mb-2">Get Feedback</h4>
																						           
                                <p>Engage with peers and receive comments to help refine your skills.</p>
																							         
                            </div>
																								        
                            <div class="p-6 rounded-2xl shadow bg-white">
																										        
                                <h4 class="text-xl font-bold mb-2">Build Your Portfolio</h4>
																											        
                                                                                                                
                                <p>Create a body of work that you can showcase to future employers or schools.</p>
																												      
                                                                                                                
                            </div>
																												          
                                                                                                                   
                        </div>
																													   
                                                                                                                        
                    </section>

																													      <!-- Footer -->
																													        
                                                                                                                          
                                                                                                                          
                                                                                                                          
        <footer class="bg-blue-600 text-white text-center py-6 mt-20">
																															   
                                                                                                                                
            <p>&copy; 2025 Campus craze. All rights reserved.</p>
																															     
                                                                                                                           
        </footer>

	</body>
</html>

