<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post - Pintereso Bootstrap Template</title>
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link rel="stylesheet" href="{{asset('landing_asset/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('landing_asset/css/theme.css')}}">


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-3" href="index.html"><img src="assets/img/logo.png"></a>
    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
    	<ul class="navbar-nav mr-auto align-items-center">
    		<form class="bd-search hidden-sm-down">
    			<input type="text" class="form-control bg-graylight border-0 font-weight-bold" id="search-input" placeholder="Search..." autocomplete="off">
    			<div class="dropdown-menu bd-search-results" id="search-results">
    			</div>
    		</form>
    	</ul>
    	<ul class="navbar-nav ml-auto align-items-center">
    		<li class="nav-item">
    		<a class="nav-link active" href="index.html">Home</a>
    		</li>
    		<li class="nav-item">
    		<a class="nav-link" href="post.html">Post</a>
    		</li>
    		<li class="nav-item">
    		<a class="nav-link" href="author.html"><img class="rounded-circle mr-2" src="assets/img/av.png" width="30"><span class="align-middle">Author</span></a>
    		</li>
    		<li class="nav-item dropdown">
    		<a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		<svg style="margin-top:10px;" class="_3DJPT" version="1.1" viewbox="0 0 32 32" width="21" height="21" aria-hidden="false" data-reactid="71"><path d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z" data-reactid="22"></path></svg>
    		</a>
    		<div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="dropdown02">
    			<h4 class="dropdown-header display-4">Download Pintereso<br/> HTML Bootstrap Template</h4>
    			<div class="dropdown-divider">
    			</div>
    			<span class="dropdown-item"><a href="https://github.com/wowthemesnet/template-pintereso-bootstrap-html/archive/master.zip" class="btn btn-primary d-block"><i class="fa fa-download"></i> Download</a></span>
    		</div>
    		</li>
    	</ul>
    </div>
    </nav>    
    <main role="main">
        
    
    <section class="bg-gray200 pt-5 pb-5">
    <div class="container">
    	<div class="row justify-content-center">
    		<div class="col-md-7">
    			<article class="card">
    			<img class="card-img-top mb-2" src="{{asset('upload/'. $img)}}" alt="Card image">
    			<div class="card-body">
    				<h1 class="card-title display-4">
    				Sushi Rolls </h1>
    				<ul>
    					<li>5 cups short-grain sushi rice</li>
    					<li>6 cups water</li>
    					<li>1/2 cup rice vinegar</li>
    					<li>2 tablespoons sugar</li>
    					<li>A teaspoon of salt</li>
    				</ul>
    				<small class="d-block"><a class="btn btn-sm btn-gray200" href="{{route('home.guest', 'jami')}}"><i class="fa fa-external-link"></i> Visit Website</a></small>
    				<!-- Begin Comments -replace demowebsite with your own id
                    ================================================== -->
    				<!--<div id="comments" class="mt-4">
    					<div id="disqus_thread">
    					</div>
    					<script type="text/javascript">
                            var disqus_shortname = 'demowebsite'; 
                            var disqus_developer = 0;
                            (function() {
                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                dsq.src = window.location.protocol + '//' + disqus_shortname + '.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                            })();
                        </script>
    					<noscript>
    					Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>
    					</noscript>
    				</div>-->
    				<!--End Comments
                    ================================================== -->
    			</div>
    			</article>
    		</div>
    	</div>
    </div>
    <!--<div class="container-fluid mt-5">
    	<div class="row">
    		<h5 class="font-weight-bold">More like this</h5>
    		<div class="card-columns">
    			<div class="card card-pin">
    				<img class="card-img" src="https://images.unsplash.com/photo-1518707399486-6d702a84ff00?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b5bb16fa7eaed1a1ed47614488f7588d&auto=format&fit=crop&w=500&q=60" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Some Title</h2>
    					<div class="more">
    						<a href="post.html">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
    					</div>
    				</div>
    			</div>
    			
    		</div>
    	</div>
    </div>-->
    </section>
        
    </main>

    <script src="{{asset('landing_asset/js/app.js')}}"></script>
    <script src="{{asset('landing_asset/js/theme.js')}}"></script>
    
    
    <footer class="footer pt-5 pb-5 text-center">
        
    <div class="container">
        
          <div class="socials-media">
    
            <ul class="list-unstyled">
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-facebook"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-twitter"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-instagram"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-google-plus"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-behance"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-dribbble"></i></a></li>
            </ul>
    
          </div>
        
            <!--
              All the links in the footer should remain intact.
              You may remove the links only if you donate:
              https://www.wowthemes.net/freebies-license/
            -->
          <p>©  <span class="credits font-weight-bold">        
            <a target="_blank" class="text-dark" href="https://www.wowthemes.net/pintereso-free-html-bootstrap-template/"><u>Pintereso Bootstrap HTML Template</u> by WowThemes.net.</a>
          </span>
          </p>
    
    
        </div>
        
    </footer>    
</body>
    
</html>
