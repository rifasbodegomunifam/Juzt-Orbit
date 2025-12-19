import { JuztOrbit } from "./modules/juzt-orbit.js";

document.addEventListener("DOMContentLoaded", () => {
  window.JuztOrbit = new JuztOrbit();
  window.JuztOrbit.init();
});