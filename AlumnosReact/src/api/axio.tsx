// src/api/axios.js
import axios from "axios";

const api = axios.create({
  baseURL: "http://desplieguedemiaplicacion.duckdns.org/api",
  headers: {
    "Content-Type": "application/json",
  },
});

export default api;
