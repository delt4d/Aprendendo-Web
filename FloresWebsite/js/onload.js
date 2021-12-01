var loading = document.createElement("div");
        var loading_title = document.createElement("h1");

        loading.style = `
            position:fixed; 
            top:0; 
            left:0; 
            bottom:0;
            right:0; 
            z-index: 99999999;
            background-color:whitesmoke;
            display: grid;
            place-items: center;
        `;

        loading_title.innerText = "Carregando...";

        loading.appendChild(loading_title);
        document.body.appendChild(loading)
        
        var cont = 1;

        function stopAnimation(animation_id) {
            loading.style.display = 'none';
            clearInterval(animation_id);
        }

        loadingAnimation = setInterval(() => {
            var points;

            if (cont === 1) {
                points = '.';
                cont = 2;
            } 
            else if (cont === 2) {
                points = '..';
                cont = 3;
            } 
            else {
                points = '...';
                cont = 1;
            }
            loading_title.innerText = "Carregando" + points;
        }, 800);

        if (!navigator.onLine) {
            stopAnimation(loadingAnimation);
            alert("Você está offline!");
        }
        
        window.addEventListener("load", () => {
            setTimeout(()=> {
                stopAnimation(loadingAnimation);
            }, 500);
        })