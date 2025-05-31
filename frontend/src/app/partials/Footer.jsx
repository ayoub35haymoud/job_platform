import Image from "next/image"
import { FaFacebookF, FaTwitter, FaInstagram, FaYoutube } from "react-icons/fa"

export default function Footer() {
  return (
    <footer className="bg-[#f8fafc] border-t border-gray-200 pt-10 pb-5 text-gray-600">
      <div className="max-w-7xl mx-auto px-4">
        <div className="flex flex-col md:flex-row md:justify-between gap-10">
          {/* Logo and Info */}
          <div className="flex-1 min-w-[220px] mb-8 md:mb-0">
            <div className="flex items-center mb-2">
              {/* Replace src with your logo path */}
              <Image src="/logo.png" alt="Jobzilla" width={42} height={42} />
              <span className="ml-2 text-3xl font-extrabold text-gray-800">
                test<span className="text-blue-600">canada</span>
              </span>
            </div>
            <p className="mb-4 text-sm text-gray-500">
              Many desktop publishing packages <br />
              and web page editors now.
            </p>
            <div className="text-sm mb-1">
              <span className="font-bold text-gray-700">Address :</span>{" "}
              65 Sunset CA 90026, USA
            </div>
            <div className="text-sm mb-1">
              <span className="font-bold text-gray-700">Email :</span>{" "}
              example@max.com
            </div>
            <div className="text-sm mb-1">
              <span className="font-bold text-gray-700">Call :</span>{" "}
              555-555-1234
            </div>
          </div>
          {/* Footer Links */}
          <div className="flex-[3] grid grid-cols-2 md:grid-cols-4 gap-8">
            {/* For Candidate */}
            <div>
              <h4 className="text-blue-600 font-bold mb-2 border-b-2 border-blue-600 pb-1 w-fit">For Candidate</h4>
              <ul className="space-y-1 text-sm">
                <li><a href="#" className="hover:underline">User Dashboard</a></li>
                <li><a href="#" className="hover:underline">Alert resume</a></li>
                <li><a href="#" className="hover:underline">Candidates</a></li>
                <li><a href="#" className="hover:underline">Blog List</a></li>
                <li><a href="#" className="hover:underline">Blog single</a></li>
              </ul>
            </div>
            {/* For Employers */}
            <div>
              <h4 className="text-blue-600 font-bold mb-2 border-b-2 border-blue-600 pb-1 w-fit">For Employers</h4>
              <ul className="space-y-1 text-sm">
                <li><a href="#" className="hover:underline">Post Jobs</a></li>
                <li><a href="#" className="hover:underline">Blog Grid</a></li>
                <li><a href="#" className="hover:underline">Contact</a></li>
                <li><a href="#" className="hover:underline">Jobs Listing</a></li>
                <li><a href="#" className="hover:underline">Jobs details</a></li>
              </ul>
            </div>
            {/* Helpful Resources */}
            <div>
              <h4 className="text-blue-600 font-bold mb-2 border-b-2 border-blue-600 pb-1 w-fit">Helpful Resources</h4>
              <ul className="space-y-1 text-sm">
                <li><a href="#" className="hover:underline">FAQs</a></li>
                <li><a href="#" className="hover:underline">Employer detail</a></li>
                <li><a href="#" className="hover:underline">Profile</a></li>
                <li><a href="#" className="hover:underline">Pricing</a></li>
              </ul>
            </div>
            {/* Quick Links */}
            <div>
              <h4 className="text-blue-600 font-bold mb-2 border-b-2 border-blue-600 pb-1 w-fit">Quick Links</h4>
              <ul className="space-y-1 text-sm">
                <li><a href="#" className="hover:underline">Home</a></li>
                <li><a href="#" className="hover:underline">About us</a></li>
                <li><a href="#" className="hover:underline">Bookmark</a></li>
                <li><a href="#" className="hover:underline">Jobs</a></li>
                <li><a href="#" className="hover:underline">Employer</a></li>
              </ul>
            </div>
          </div>
        </div>
        {/* Copyright and Social */}
        <div className="border-t border-gray-200 mt-8 pt-5 flex flex-col md:flex-row items-center justify-between">
          <div className="text-sm text-gray-500 mb-2 md:mb-0">
            Copyright © 2025 by canada. All Rights Reserved.
          </div>
          <div className="flex space-x-5 text-blue-700 text-2xl">
            <a href="#" aria-label="Facebook" className="hover:text-blue-500"><FaFacebookF /></a>
            <a href="#" aria-label="Twitter" className="hover:text-blue-500"><FaTwitter /></a>
            <a href="#" aria-label="Instagram" className="hover:text-blue-500"><FaInstagram /></a>
            <a href="#" aria-label="YouTube" className="hover:text-blue-500"><FaYoutube /></a>
          </div>
        </div>
      </div>
    </footer>
  )
}
