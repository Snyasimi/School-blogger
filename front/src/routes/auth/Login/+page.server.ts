import type { Actions } from './$types';



export const load: PageLoad = async () => {

};



export const actions = {
	login:async({request})=>{

        const data = await request.formData();
        const email = data.get("Email");
        const password = data.get("Password");

    }
};