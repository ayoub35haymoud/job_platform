import LoginLinks from '@/app/LoginLinks'
import HeroSection from './partials/HeroSection'

export const metadata = {
    title: 'Laravel',
}

const Home = () => {
    return (
        <>      
            <LoginLinks />  
            <HeroSection/>  
        </>
    )
}

export default Home
