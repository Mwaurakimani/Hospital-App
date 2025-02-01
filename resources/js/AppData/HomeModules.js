const HomeRoutes = [
    {
        name: "Home",
        link: route('Home'),
        supported: ['Home'],
    },
    {
        name: "Doctors",
        link: route('Home.index.Doctors'),
        supported: ['Home.index.Doctors'],
    },
    {
        name: "Procedures",
        link: route('Home.index.Procedures'),
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
