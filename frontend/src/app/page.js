import Footer from '@/app/partials/Footer'
import HeroSection from '@/app/partials/HeroSection'
import Blog from '@/app/partials/Blog'
import LoginLinks from '@/app/LoginLinks'
import Community from '@/app/partials/Community'
import Testimonials from '@/app/partials/Testimonials'
import BlogSection from '@/app/partials/BlogSection'


export const metadata = {
    title: 'Laravel',
}

const Home = () => {
    return (
        <>      
            <LoginLinks />  
            <HeroSection/>  

            <Community />
            <BlogSection />
            <Testimonials />
            
            <Blog/>
            <Footer/>
        </>
    )
}

export default Home
