'use client';
import { FaQuoteLeft, FaStar } from 'react-icons/fa';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Autoplay } from 'swiper/modules';
import 'swiper/css';

const testimonials = [
  {
    id: 1,
    text: 'I have minim mollit non deserunt ullamco est sit aliqua dolor do Eam et sint. Velit officia consequat.',
    name: 'Guy Hawkins',
    title: 'UI/UX Designer',
    avatar: 'https://randomuser.me/api/portraits/women/45.jpg',
  },
  {
    id: 2,
    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae velit ex.',
    name: 'Jane Cooper',
    title: 'Product Manager',
    avatar: 'https://randomuser.me/api/portraits/women/46.jpg',
  },
  {
    id: 3,
    text: 'Dolore officia pariatur dolor laboris magna nostrud sunt ipsum ullamco labore amet.',
    name: 'Albert Flores',
    title: 'Software Engineer',
    avatar: 'https://randomuser.me/api/portraits/men/32.jpg',
  },
  {
    id: 4,
    text: 'Labore non sit culpa pariatur id est sint. Qui id aute occaecat pariatur deserunt.',
    name: 'Jenny Wilson',
    title: 'Marketing Lead',
    avatar: 'https://randomuser.me/api/portraits/women/47.jpg',
  },
];

const TestimonialSection = () => {
  return (
    <div className="bg-white py-16 px-4 lg:px-24 flex flex-col lg:flex-row justify-center items-center gap-12">
      {/* Left Text Area */}
      <div className="max-w-lg">
        <p className="text-blue-600 font-semibold mb-2">Testimonials</p>
        <h2 className="text-3xl md:text-4xl font-bold mb-4">
          Quotes from our customer about us
        </h2>
        <p className="text-gray-600 mb-6">
          You need to create an account to find the best and preferred job.
          Lorem Ipsum is simply dummy text of the printing and typesetting
          the standard dummy text ever since the when an printer took.
        </p>
        <button className="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded">
          Show All Quotes
        </button>
      </div>

      {/* Right Testimonials */}
      <div className="relative w-full max-w-xl">
        <div className="absolute -top-6 -right-6 w-full h-full rounded-xl bg-blue-700 z-0"></div>

        <div className="relative z-10">
          <Swiper
            direction="vertical"
            slidesPerView={2}
            spaceBetween={10}
            loop={true}
            autoplay={{
              delay: 4000,
              disableOnInteraction: false,
            }}
            modules={[Autoplay]}
            className="h-[520px]"
          >
            {testimonials.map((item) => (
              <SwiperSlide key={item.id}>
                <div className="bg-white m-4 shadow-lg shadow-blue-900 hover:shadow-blue-200  transition-shadow duration-300 ease-in-out rounded-lg p-6 flex flex-col sm:flex-row items-start gap-">
                  <FaQuoteLeft className="text-blue-600 text-2xl" />
                  <div>
                    <p className="text-gray-700 italic mb-2">{' '+ item.text}</p>
                    <div className="flex items-center gap-3 mt-4">
                      <img
                        src={item.avatar}
                        alt="avatar"
                        className="w-10 h-10 rounded-full"
                      />
                      <div>
                        <p className="font-semibold">{item.name}</p>
                        <p className="text-sm text-gray-500">{item.title}</p>
                      </div>
                    </div>
                    <div className="flex text-yellow-400 mt-2">
                      {[...Array(5)].map((_, i) => (
                        <FaStar key={i} />
                      ))}
                    </div>
                  </div>
                </div>
              </SwiperSlide>
            ))}
          </Swiper>
        </div>
      </div>
    </div>
  );
};

export default TestimonialSection;
