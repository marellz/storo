import axios from "axios";

export const api = axios.create({
  baseURL: "http://localhost:8000",
  withCredentials: true,
  headers: {
    "Content-Type": "application/json",
  },
});

export const setToken = (token) => {
  api.defaults.headers.common["X-XSRF-TOKEN"] = token;
}
