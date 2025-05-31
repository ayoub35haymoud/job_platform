import Footer from '@/app/partials/Footer'
import HeroSection from '@/app/partials/HeroSection'
import Blog from '@/app/partials/Blog'
import LoginLinks from '@/app/LoginLinks'

export const metadata = {
    title: 'Laravel',
}

const Home = () => {
    return (
        <>      
            <LoginLinks />  
            <HeroSection/>  
            <Blog/>
            <Footer/>
        </>
    )
}

export default Home
