import LoginLinks from '@/app/LoginLinks'
import HeroSection from './partials/HeroSection'
import Community from './partials/Community'
import Testimonials from './partials/Testimonials'
import BlogSection from './partials/BlogSection'

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
            
        </>
    )
}

export default Home
