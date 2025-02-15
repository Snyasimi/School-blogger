<main>
	
	
	<form>

		<h2>
			Sign up
		</h2>
	
		<label>First Name
			<input type="text" name="firstName">
		</label>
	
	
		<label>Last Name
			<input type="text" name="firstName">
		</label>
	
	
		<label>Email
			<input type="text" name="firstName">
		</label>
	
	
		<label>Registration Number
			<input type="text" name="firstName">
		</label>
	
		<label>Campus Branch
			<input type="text" name="firstName">
		</label>
	
		<label>Password
			<input type="text" name="firstName">
		</label>
	
		<label for="confirmPassword">Confirm Password
			<input type="text" name="confirmPassword">
		</label>
		
		<button type="submit">Submit</button>
	</form>
</main>

<style>

main {

display: flex;
flex-flow: column wrap;
border: 2px solid green;
min-height: 100dvh;

}


	
form{
		display: block;
		border: 2px solid black;
		padding: 1rem;
		display: flex;
		flex-flow: column wrap;
		gap:2rem;
		min-width:50%;
		margin:auto;
		
	}
	label{
		display: block;
		
	}
	input{
		display: block;
		min-width: 100%;
		line-height: 3;
		border-radius: 0.5rem;
	}

	button{
		margin: auto;
		min-width:50%;
		line-height: 2;
		border-radius: 0.5rem;
	}

</style>