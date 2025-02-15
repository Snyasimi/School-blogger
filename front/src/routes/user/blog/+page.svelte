
  <main>

    <aside class="side-nav">
        <nav>
          <ul class="side-links">
           <!-- {#each links as link}
              <li><a href={link.href}>{link.text}</a></li>
            {/each} -->
  
            <li><a href="">Blog</a></li>
            <li><a href="#">Following</a></li>
            <li><a href="#">Bookmarks</a></li>
            <li><a href="#">My post</a></li>
            <li><a href="#">Setting</a></li>
          </ul>
        </nav>
      </aside>

    

	<section class="content">
		<article>
		  <section>
			<figure>
				<img src="#">
			</figure>

			<h2>Blog Title 1</h2>
			<p>Content for blog 1...</p>
			<div class="blog-actions">
				<ul class="blog-buttons">
					<li>save</li>
					<li>Like</li>
					<li>share</li>
				</ul>
			</div>
			
		  </section>
		  <section>
			<figure>
				<img src="#">
			</figure>

			<h2>Blog Title 2</h2>
			<p>Content for blog 2...</p>
			<div class="blog-actions">
				<ul class="blog-buttons">
					<li>save</li>
					<li>Like</li>
					<li>share</li>
				</ul>
			</div>
		  </section>
		  <section>
			<figure>
				<img src="#">
			</figure>

			<h2>Blog Title 3</h2>
			<p>Content for blog 3...</p>

			<div class="blog-actions">
				<ul class="blog-buttons">
					<li>save</li>
					<li>Like</li>
					<li>share</li>
				</ul>
			</div>
		  </section>
  
  
		  <section>
			<figure>
				<img src="#">
			</figure>

			  <h2>Blog Title 1</h2>
			  <p>Content for blog 1...</p>

			  <div class="blog-actions">
				<ul class="blog-buttons">
					<li>save</li>
					<li>Like</li>
					<li>share</li>
				</ul>
			</div>

			</section>

			<section>
				<figure>
					<img src="#">
				</figure>

			  <h2>Blog Title 2</h2>
			  <p>Content for blog 2...</p>

			  <div class="blog-actions">
				<ul class="blog-buttons">
					<li>save</li>
					<li>Like</li>
					<li>share</li>
				</ul>
			</div>

			</section>

			<section>
				<figure>
					<img src="#">
				</figure>

			  <h2>Blog Title 3</h2>
			  <p>Content for blog 3...</p>

			  <div class="blog-actions">
				<ul class="blog-buttons">
					<li>save</li>
					<li>Like</li>
					<li>share</li>
				</ul>
			</div>
			</section>
  
  
		</article>
	  </section>

  </main>
	
  
  <style>
	 main{
        display:flex;
        min-height: 100dvh;
        border:2px solid yellow;
    }


    main > *:nth-child(2){
        flex:2;

    }


    aside{
        min-width: 15%;
    }

	.side-links{
		list-style: none;
		border:2px dashed blue;
		min-height: 100%;
		padding: 0;
	}

	.side-links > li{
		padding:1rem;
		border:2px solid yellow;
		a{
			display: block;
			text-decoration: none;
			border:2px solid black;
			padding:1rem;
			text-align: center;
		}
		a:hover{
			background-color: black;
		}
	}


	article {
		border:2px solid green;
		display: grid;
		grid-template-columns: repeat(auto-fit,minmax(350px,1fr));
		gap:1rem;
		min-height: 100%;
		min-width: 100%;
	}
	article > section{
		border:2px solid red;
	}
	img{
		width:100%;
	}
	.blog-buttons{
		display: flex;
		padding:0;
		list-style: none;
		text-align: center;
	}
	.blog-buttons > *{
		flex:1;
		border:1px solid black;
		padding:.5rem;
	}

	section > figure{

	}


  </style>
  