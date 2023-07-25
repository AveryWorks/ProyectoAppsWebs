
// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
import { getFirestore, collection, addDoc } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-firestore.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCcf6C87J6XjH02XmhcV1dxsmyzzrtqSZk",
  authDomain: "basededatos-680d1.firebaseapp.com",
  projectId: "basededatos-680d1",
  storageBucket: "basededatos-680d1.appspot.com",
  messagingSenderId: "656179840134",
  appId: "1:656179840134:web:37c5176ea66c1545e27d07",
  measurementId: "G-5L0QJ2T2HF",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const db= getFirestore();

export const saveTask = (email, contrasena) =>
    addDoc(collection(db, 'tasks', '1'),{email, contrasena});

