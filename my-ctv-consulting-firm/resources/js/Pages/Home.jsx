import React from 'react';
import { Head } from '@inertia/react';
import Hero from '../Components/Hero';
import About from '../Components/About';
import Services from '../Components/Services';
import Testimonials from '../Components/Testimonials';
import FAQ from '../Components/FAQ';
import ContactForm from '../Components/ContactForm';
import MyComponent from "../Components/MyComponent.jsx";


export default function Home () {
    return (
        <>
            <Head title={"Home"} />
            <Hero />
            <About />
            <Services />
            <Testimonials />
            <FAQ />
            <ContactForm />
            <MyComponent />
        </>
    )
}

