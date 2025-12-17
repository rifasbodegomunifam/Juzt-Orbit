import "../css/index.css";

import { JuztOrbit } from "./modules/juzt-orbit.js";

document.addEventListener("DOMContentLoaded", () => {
  window.JuztOrbit = new JuztOrbit();


  //initialize module
  window.JuztOrbit.init();
});