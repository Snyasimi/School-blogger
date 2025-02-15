<main>


    <form action="POST">

        <h2>
            Login
        </h2>
    
        <label>Email
            <input type="text" name="firstName">
        </label>
    
        <label>Password
            <input type="text" name="firstName">
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
            margin: auto;
            display: flex;
            flex-flow: column wrap;
            min-width:50%;
            
        }
        label{
            display: block;
            margin: 1rem;
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