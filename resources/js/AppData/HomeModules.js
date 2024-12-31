const HomeRoutes = [
    {
        name: "Home",
        link: route('Home'),
        supported: ['Home'],
    },
    {
        name: "Doctors",
        link: route('Home.Doctors'),
        supported: ['Home.Doctors'],
    },
    {
        name: "Procedures",
        link: route('Home.Procedures'),
        supported: ['Home.Procedures'],
    },
]

const authPages = [
    {
        name: "Register",
        link: route('register'),
        supported: ['register'],
    },
    {
        name: "Log In",
        link: route('login'),
        supported: ['login'],
    },
]



export {
    HomeRoutes,authPages
};
