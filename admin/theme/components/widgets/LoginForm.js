import Loading from "./Loading.js";

export default
{
	template:
	`
		<form class="login-form" @submit.prevent="submit">
			<template v-if="!loading">
				<h1>
					Sign In
				</h1>
				<ul class="errors" v-if="errors.length > 0">
					<li v-for="error in errors">
						{{ error }}
					</li>
				</ul>
				<input type="text" placeholder="Email" title="Email" v-model="email" />
				<input type="password" placeholder="Password" title="Password" v-model="password" />
				<button class="button" type="submit">Sign In</button>
			</template>
			<loading v-else />
		</form>
	`,
	
	components:
	{
		"loading": Loading,
	},
	
	data: function()
	{
		return {
			email: "",
			errors: [],
			loading: false,
			password: ""
		};
	},
	
	methods:
	{
		submit: async function()
		{
			this.loading = true;
			
			let formData = new FormData();
			formData.set("email", this.email);
			formData.set("password", this.password);
			
			let data = await (await window.fetch("/Account/Action/Login/?json",
			{
				method: "post",
				body: formData,
			})).json();
			
			if(data.success)
			{
				document.location.reload();
			}
			else
			{
				this.errors = data.errors;
				this.loading = false;
			}
		}
	}
};