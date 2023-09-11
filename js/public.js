//faccio una chiamata al server per recuperare una lista dei post
axios.get("api/posts.php").then(function (response) {
  const posts_ul = document.getElementById("posts_ul");
  // recupero tutto quello che il server stampa all'interno 
  const posts = response.data;

  //cicliamo su tutti i post
  for (let i = 0; i < posts.length; i++) {
    posts_ul.innerHTML += `
    <li>
      <a>${posts[i].title}</a>
    </li>
    `;
  }
});