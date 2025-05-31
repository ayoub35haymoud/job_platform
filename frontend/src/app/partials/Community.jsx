'use client';
import { FaRegClipboard, FaNetworkWired, FaUserTie, FaSmile } from 'react-icons/fa';

const CommunitySection = () => {
  return (
    <div className="w-full bg-white">
      {/* Top Banner */}
      <div className="bg-blue-700 text-white py-16 px-6 text-center">
        <p className="text-sm uppercase mb-2">Our Community</p>
        <h2 className="text-3xl sm:text-4xl font-bold max-w-2xl mx-auto">
          Join our community of talented and professionals by applying for a job today!.
        </h2>
      </div>

      {/* Stats Section */}
      <div className="max-w-6xl mx-auto -mt-10 px-4">
        <div className="bg-gray-900 rounded-xl shadow-lg py-10 px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center text-white">
          <div>
            <FaRegClipboard className="text-4xl mx-auto mb-4 text-cyan-400" />
            <p className="text-2xl font-bold">1590</p>
            <p className="mt-2 text-gray-300">Completed Cases</p>
          </div>
          <div>
            <FaNetworkWired className="text-4xl mx-auto mb-4 text-purple-400" />
            <p className="text-2xl font-bold">1740</p>
            <p className="mt-2 text-gray-300">Our Office</p>
          </div>
          <div>
            <FaUserTie className="text-4xl mx-auto mb-4 text-yellow-400" />
            <p className="text-2xl font-bold">800</p>
            <p className="mt-2 text-gray-300">Skilled People</p>
          </div>
          <div>
            <FaSmile className="text-4xl mx-auto mb-4 text-pink-400" />
            <p className="text-2xl font-bold">16</p>
            <p className="mt-2 text-gray-300">Happy Client</p>
          </div>
        </div>
      </div>
    </div>
  );
};

export default CommunitySection;
