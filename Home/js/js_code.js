
			const myForm = document.getElementById('myForm');
			const inpFile = document.getElementById('inpFile');
			console.log(myForm);
			console.log(inpFile);

			myForm.addEventListener("submit", e => {
			e.preventDefault();

			const endpoint = "upload.php";
			const formData = new FormData();

			formData.append("inpFile", inpFile.files[0]);

			fetch(endpoint , {
				method: "post",
				body: formData
			}).catch(console.error);
			});

			function ricarica(){
				setTimeout(() => {
					window.location.reload();
				}, 250);
			}