<script lang="ts">

    let {children} = $props(); 

</script>

  
<header>
	<div class="logo">Logo</div>
	<input type="text" placeholder="Search..." />
	<div class="profile-settings">Profile</div>
  </header>

  {@render children()}

 



  <style>
    header{
        display: flex;
        line-height: 3;
        gap:.5rem;
    }
    header > *{
        flex:1;
        border:2px solid blue;
    }
    header> *:first-child{
        max-width:20%;
        margin-right: auto;
    }

    header> *:last-child{
        max-width:20%;
        margin-left: auto;
    }

   
  </style>