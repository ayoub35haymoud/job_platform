import Image from "next/image";

const articles = [
  {
    date: "March 05, 2023",
    author: "Mark Petter",
    authorUrl: "#",
    title: "How to convince recruiters and get your dream job",
    desc: "New chip traps clusters of migrating tumor cells asperiotenetur, blanditiis odit.",
    img: "/blog1.jpg",
  },
  {
    date: "March 05, 2023",
    author: "David Wish",
    authorUrl: "#",
    title: "5 things to know about the March 2023 jobs report",
    desc: "New chip traps clusters of migrating tumor cells asperiotenetur, blanditiis odit.",
    img: "/blog2.jpg",
  },
  {
    date: "March 05, 2023",
    author: "Mike Doe",
    authorUrl: "#",
    title: "Job Board is the most important sector in the world",
    desc: "New chip traps clusters of migrating tumor cells asperiotenetur, blanditiis odit.",
    img: "/blog3.jpg",
  },
];

export default function LatestArticlesSection() {
  return (
    <section className="bg-[#f6fbfd] py-14">
      <div className="max-w-7xl mx-auto px-4">
        <div className="text-center mb-4">
          <span className="text-blue-600 font-bold block mb-2">Our Blogs</span>
          <h2 className="text-4xl font-extrabold text-gray-900 mb-10">
            Latest Article
          </h2>
        </div>
        <div className="flex flex-col md:flex-row gap-10 justify-center items-stretch">
          {articles.map((art, idx) => (
            <div
              key={idx}
              className="bg-white rounded-2xl shadow-lg p-8 flex-1 max-w-md mx-auto md:mx-0 hover:shadow-xl transition-all flex flex-col"
              style={{ minWidth: "320px", maxWidth: "350px", minHeight: "480px" }}
            >
              <div className="w-full h-56 rounded-xl overflow-hidden mb-6">
                <Image
                  src={art.img}
                  alt={art.title}
                  width={420}
                  height={224}
                  className="object-cover w-full h-full"
                  priority={idx === 0}
                />
              </div>
              <div className="flex items-center mb-3">
                {/* Blue ticket-style date, refined */}
                <span
                  className="relative bg-[#6688ad] text-white text-[15px] font-semibold px-5 py-1 rounded-tr-xl rounded-br-xl mr-3"
                  style={{
                    display: "inline-block",
                    minWidth: "120px",
                    height: "36px",
                    lineHeight: "34px",
                  }}
                >
                  {/* Sharper triangle */}
                  <span
                    className="absolute -left-3 bottom-0 w-0 h-0 border-t-[18px] border-t-transparent border-b-[18px] border-b-transparent border-r-[14px] border-r-[#6688ad]"
                    style={{
                      top: "50%",
                      transform: "translateY(-50%)",
                    }}
                  ></span>
                  {art.date}
                </span>
                <span className="text-sm text-gray-500">
                  By{" "}
                  <a
                    href={art.authorUrl}
                    className="font-bold text-[#3766cd] hover:underline"
                  >
                    {art.author}
                  </a>
                </span>
              </div>
              <h3 className="font-bold text-xl text-gray-900 mb-2 leading-snug">
                {art.title}
              </h3>
              <p className="text-base text-gray-500 mb-4">{art.desc}</p>
              <a
                href="#"
                className="text-[#3766cd] font-semibold text-base hover:underline mt-auto"
              >
                Read More
              </a>
            </div>
          ))}
        </div>     
      </div>
    </section>
  )
}
