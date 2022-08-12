<style>
  * {
    padding: 0px;
    margin: 0px;
    text-decoration: none;
  }

  body {
    background-image: linear-gradient(180deg, #ffff7c 0, #ffff6f 12.5%, #fff565 25%, #ffda5c 37.5%, #f2bd53 50%, #dda14c 62.5%, #c98a46 75%, #b77642 87.5%, #a8663f 100%);
  }

  header {
    background-image: linear-gradient(45deg, orange, red);
    padding-top: 20px;
    padding-bottom: 40px;
  }

  nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-family: Arial, verdana, Helvetica, sans-serif;
    background: linear-gradient(to bottom left, #ffb900 -1%, #ff6600 100%);
    font-size: 20px;
    height: 5vh;
    margin: auto;
    box-shadow: 0px 7px 7px rgba(0, 0, 0, 0.1992);
  }

  nav a {
    color: white;
    font-weight: bolder;
    transition-duration: 1s;
  }

  nav a:hover {
    background-color: #ff6600;
    color: yellow;
    font-weight: bold;
    border-radius: 5px;
    text-transform: uppercase;
  }

  .nav-list a {
    letter-spacing: 10px;
    margin-left: 32px;
    text-decoration: none;
    font-weight: bold;
    color: whitesmoke;
    padding: 10px;
  }

  .img {
    display: flex;
    margin: auto;
  }

  article {
    background: linear-gradient(to bottom left, #ffb900 -1%, #ff6600 100%);
    min-width: 300px;
    max-width: 1500px;
    padding: 50px 75px 50px 75px;
    box-shadow: 0px 0px 10px black;
    margin: auto;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  h1 {
    text-align: center;
    color: black;
    font-size: 50px;
  }

  .flex {
    max-width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin: 0 100px;
  }

  #Principal {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    align-content: center;
    row-gap: 20px;
    column-gap: 300px;
  }

  #Marmitas {
    background-image: linear-gradient(50deg, orange, red);
    padding: 3em;
    font-family: Arial, Helvetica, sans-serif;
    box-shadow: rgba(0, 0, 0, 0.9);
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    color: black;
    margin: 10px -85px 5px -30px;
    border: 2px solid black;
    box-shadow: 0px 7px 7px rgba(0, 0, 0, 0.1992);

  }

  h3 {
    text-align: center;
  }

  .ip {
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding: 10px 0;
    ;
  }

  .ip2 {
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding: 35px 0;
    align-items: flex-end;
    ;
  }

  button {
    border-radius: 12px;
    padding: 10px 24px;
    font-size: 12px;
    background-color: #e7e7e7;
    border: 2px solid black;
    transition-duration: 0.4s;
    font-weight: bold;
    margin-top: 10px;
    margin-inline-start: 100px;
  }

  button:hover {
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    background-color: #4CAF50;
    /* Green */
    color: white;
    font-weight: bold;
  }

  button:hover {
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    background-color: #4CAF50;
    /* Green */
    color: white;
    font-weight: bold;

  }

  .unica {
    width: 350px;
    text-align: center;
    padding: 15px 20px;
    border: 1px solid #eee;
    border-radius: 6px;
    background-color: #FCC302;
    font-size: 18px;

  }



  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    padding: 0 20px;
    margin-right: 10px;
  }

  td,
  th {
    border: 1px solid black;
    text-align: center;
    padding: 5 10 5 10;

  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }

  .config {
    margin-left: 15px;

  }

  form {
    border: 1px solid #eee;
    padding: 0 10px;
    text-decoration: none;
    background-image: linear-gradient(90deg, orange, red);
    align-items: center;
    justify-content: space-between;
  }

  input {
    color: black;
  }

  h5 {
    font-size: 15px;

  }
</style>