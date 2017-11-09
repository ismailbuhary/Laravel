


  
  console.log("App is running");

  const template = React.createElement(
    "h1",
    { id: "a1" },
    "Hi there "
  );
  const appRoot= document.getElementById("app");

  ReactDOM.render(template,appRoot);

