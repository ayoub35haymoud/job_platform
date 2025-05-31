'use client';

const blogs = [
  {
    id: 1,
    image: 'https://images.unsplash.com/photo-1581090700227-1e37b190418e', // Replace with your own
    title: 'Canada Extends Work Flexibility for Foreign Workers with Closed Work Permits',
    date: 'May-22, 2025',
    author: 'Admin',
    excerpt: 'In May 2025, Canada took another significant step in supporting economic integration and labor mobility by extending a key policy that ..',
  },
  {
    id: 2,
    image: 'https://images.unsplash.com/photo-1581090700227-1e37b190418e',
    title: 'Groundbreaking Immigration Reforms: What Canada’s New Policy Means for Newcomers',
    date: 'May-14, 2025',
    author: 'Admin',
    excerpt: 'In a significant shift following the 2025 federal election, the Canadian government has unveiled sweeping reforms to its immigration po..',
  },
  {
    id: 3,
    image: 'https://images.unsplash.com/photo-1581090700227-1e37b190418e',
    title: 'Changes to Canadian Citizenship Rules and Requirements: What Newcomers Need to Know',
    date: 'May-08, 2025',
    author: 'Admin',
    excerpt: 'Canada\'s citizenship laws have undergone significant changes in recent years, impacting how newcomers can acquire citizenship. Jobs for..',
  },
];

const BlogSection = () => {
  return (
    <section className="bg-gray-50 py-16 px-4 md:px-8 lg:px-24">
      <div className="text-center mb-12">
        <h2 className="text-3xl font-bold mb-2">Latest Blogs</h2>
        <p className="text-gray-500">
          Latest News & Updates for <span className="font-semibold">jobs in Canada</span>
        </p>
      </div>

      {/* Blog Cards */}
      <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        {blogs.map((blog) => (
          <div
            key={blog.id}
            className="bg-white rounded-xl shadow-md hover:shadow-lg transition p-4"
          >
            <img
              src={blog.image}
              alt={blog.title}
              className="rounded-xl w-full h-48 object-cover mb-4"
            />
            <h3 className="text-lg font-semibold mb-2">{blog.title}</h3>
            <div className="flex justify-between text-sm text-gray-500 mb-2">
              <span>{blog.date}</span>
              <span>By {blog.author}</span>
            </div>
            <p className="text-gray-600 text-sm mb-3">{blog.excerpt}</p>
            <a href="#" className="text-blue-600 font-medium hover:underline text-sm">
              Read More
            </a>
          </div>
        ))}
      </div>

      {/* More Blogs Button */}
      <div className="mt-10 text-center">
        <button className="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 transition">
          More Blogs
        </button>
      </div>
    </section>
  );
};

export default BlogSection;
