
<?php
      require "../header.php";
?>

    <div class="flex justify-center items-center min-h-screen">
        <!-- Left Side Buttons -->
        <div class="w-1/2 p-4">
            <div class="space-y-4">
                <!-- Button Items -->
                <div class="flex items-center bg-indigo-900 text-white rounded-lg shadow-md px-4 py-3">
                    <i class="fas fa-university text-lg"></i>
                    <span class="ml-4">Become a Banker Immediately</span>
                </div>
                <div class="flex items-center bg-indigo-900 text-white rounded-lg shadow-md px-4 py-3">
                    <i class="fas fa-globe text-lg"></i>
                    <span class="ml-4">Start Kiosk ATM Franchisee Partnership</span>
                </div>
                <div class="flex items-center bg-indigo-900 text-white rounded-lg shadow-md px-4 py-3">
                    <i class="fas fa-file-alt text-lg"></i>
                    <span class="ml-4">Start Kiosk ATM Distributorship</span>
                </div>
                <div class="flex items-center bg-indigo-900 text-white rounded-lg shadow-md px-4 py-3">
                    <i class="fas fa-sitemap text-lg"></i>
                    <span class="ml-4">Be a Digital Convenience Distributor</span>
                </div>
                <div class="flex items-center bg-indigo-900 text-white rounded-lg shadow-md px-4 py-3">
                    <i class="fas fa-laptop text-lg"></i>
                    <span class="ml-4">Start your White Label Dashboard</span>
                </div>
                <div class="flex items-center bg-indigo-900 text-white rounded-lg shadow-md px-4 py-3">
                    <i class="fas fa-cogs text-lg"></i>
                    <span class="ml-4">Customised API services partnership</span>
                </div>
                <div class="flex items-center bg-indigo-900 text-white rounded-lg shadow-md px-4 py-3">
                    <i class="fas fa-calculator text-lg"></i>
                    <span class="ml-4">Tally Prime Services and Customization</span>
                </div>
            </div>
        </div>

        <!-- Right Side Logo and Text -->
        <div class="w-1/2 flex flex-col justify-center items-center text-center p-6">
            <div>
                <!-- Logo -->
                <img src="https://via.placeholder.com/150/FF0000/FFFFFF?text=Logo" alt="Logo" class="w-32 mb-4 mx-auto">
            </div>
            <!-- Title -->
            <h2 class="text-red-600 font-bold text-xl">Toshani</h2>
            <h3 class="text-red-500 font-semibold mb-2">A Trusted Partner for Banking, Insurance & Financial Services</h3>
            <!-- Description -->
            <p class="text-gray-600 leading-relaxed">
                Spread smiles to every customer who enters your shop with premium Digital solutions for Banking, 
                Financial and Insurance services. Serve the society for a good cause & earn better profitability 
                from your business.
            </p>
        </div>
    </div>

    <section class="bg-white dark:bg-gray-900">
      <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2
          class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white"
        >
        Apply for Channel Partner
        </h2>
        <form action="#" class="space-y-8">

        <div class="mb-4">
  <label class="block text-gray-700 font-medium mb-2">Do you have a PAN Card?</label>
  <div class="flex items-center space-x-4">
    <!-- Yes Option -->
    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="Yes" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
        required
      />
      <span class="text-gray-700">Yes</span>
    </label>

    <!-- No Option -->
    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="No" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
      />
      <span class="text-gray-700">No</span>
    </label>
  </div>
</div>


          <div>
            <input
              type="text"
              id="email"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Enter PANCARD "
              required
            />
          </div>
          
          <div class="mb-4">
  <label class="block text-gray-700 font-medium mb-2">
    Applying for: <span class="text-sm text-gray-500">(Hold 'Ctrl' or 'Cmd' key to select multiple options)</span>
  </label>
  <select
    id="applying_for"
    name="applying_for[]"
    multiple
    class="block w-full p-3 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
    required
  >
  <option value="">—Please choose an option—</option><option value="Franchisee">Franchisee</option><option value="Distributor">Distributor</option><option value="Retailer">Retailer</option><option value="Become a Banker">Become a Banker</option><option value="Start Kiosk ATM Franchisee Partnership">Start Kiosk ATM Franchisee Partnership</option><option value="Start Kiosk ATM Distributorship">Start Kiosk ATM Distributorship</option><option value="Be a Digital conveniences Distributor">Be a Digital conveniences Distributor</option><option value="Start your White Label Dashboard">Start your White Label Dashboard</option><option value="Customised API services partnership">Customised API services partnership</option><option value="Tally Prime Services and customization">Tally Prime Services and customization</option>
  </select>
</div>
          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Entity Type
  </label>

  <select name="" id=""  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"> 
  <option value="">—Please choose an option—</option><option value="Co-operative Society">Co-operative Society</option><option value="Company">Company</option><option value="Individual">Individual</option><option value="Limited Liability Partnership Firm (LLP)">Limited Liability Partnership Firm (LLP)</option><option value="NGO">NGO</option><option value="Partnership">Partnership</option><option value="Proprietorship (Owned by Individual)">Proprietorship (Owned by Individual)</option><option value="Proprietorship (Owned by HUF)">Proprietorship (Owned by HUF)</option><option value="Self Help Group">Self Help Group</option><option value="Trust">Trust</option>
  </select>
           
          </div>

         
          <h2>Personal Details</h2>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          First Name
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="First name"
              required
            />
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Middle Name
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Middle Name"
              required
            />
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Last name
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Last name"
              required
            />
          </div>

          <div class="mb-4">
  <label class="block text-gray-700 font-medium mb-2">Gender</label>
  <div class="flex items-center space-x-4">
    <!-- Yes Option -->
    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="Yes" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
        required
      />
      <span class="text-gray-700">Male</span>
    </label>

    <!-- No Option -->
    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="No" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
      />
      <span class="text-gray-700">Female</span>
    </label>

    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="No" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
      />
      <span class="text-gray-700">Other</span>
    </label>
  </div>
</div>

<div>
          <label class="block text-gray-700 font-medium mb-2">
          Date of Birth
  </label>
            <input
              type="date"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Last name"
              required
            />
          </div>

          <div class="mb-4">
  <label class="block text-gray-700 font-medium mb-2">Are you an Ex-Employee?</label>
  <div class="flex items-center space-x-4">
    <!-- Yes Option -->
    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="Yes" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
        required
      />
      <span class="text-gray-700">Yes</span>
    </label>

    <!-- No Option -->
    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="No" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
      />
      <span class="text-gray-700">No</span>
    </label>

  </div>
</div>



<div>
          <label class="block text-gray-700 font-medium mb-2">
          Current Occupation
  </label>

  <select name="" id=""  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"> 
  <option value="">—Please choose an option—</option><option value="Insurance Agent">Insurance Agent</option><option value="MLM Agents">MLM Agents</option><option value="Travel Agents">Travel Agents</option><option value="Service/Working Professional">Service/Working Professional</option><option value="DSA for Loan Companies">DSA for Loan Companies</option><option value="Mobile Phone/Recharge Outlet">Mobile Phone/Recharge Outlet</option><option value="Entrepreneur/Proprietor">Entrepreneur/Proprietor</option><option value="Retail Store">Retail Store</option><option value="Grocery General Store">Grocery General Store</option><option value="Medical Store/Pharmacy">Medical Store/Pharmacy</option><option value="Business &amp; Finance">Business &amp; Finance</option><option value="Photographers">Photographers</option><option value="Money Transfer Agent">Money Transfer Agent</option><option value="CSC">CSC</option><option value="E-Mitra Agent">E-Mitra Agent</option><option value="Bill Payment Agent">Bill Payment Agent</option><option value="Banking Point">Banking Point</option><option value="Student">Student</option><option value="House Wife">House Wife</option>
  </select>
           
          </div>

       

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          How did you come to know about Toshani?
  </label>

  <select name="" id=""  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"> 
  <option value="">—Please choose an option—</option><option value="Email">Email</option><option value="Facebook">Facebook</option><option value="Friends / Relative">Friends / Relative</option><option value="Internet Search / Website">Internet Search / Website</option><option value="Newspaper">Newspaper</option><option value="Social Media">Social Media</option><option value="Twitter">Twitter</option><option value="Vakrangee Franchisee">Vakrangee Franchisee</option><option value="WhatsApp Message">WhatsApp Message</option><option value="YouTube">YouTube</option><option value="Others">Others</option>
  </select>
           
          </div>

       
          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Referred by
  </label>

  <select name="" id=""  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"> 
  <option value="None">None</option><option value="Employee">Employee</option><option value="Franchisee">Franchisee</option><option value="Agent">Agent</option><option value="Master Franchisee">Master Franchisee</option>
  </select>
           
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          WhatsApp Mobile Number
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="What Number"
              required
            />
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Email Address
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Email Addres"
              required
            />
          </div>

          <h2>Channel Partner Address Details</h2>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Address 1
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Address 1"
              required
            />
          </div>

<div>
          <label class="block text-gray-700 font-medium mb-2">
          Address 2
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Address 2"
              required
            />
          </div>

<div>
          <label class="block text-gray-700 font-medium mb-2">
          City
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="City"
              required
            />
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Zip / Postal Code
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Zip / State Code"
              required
            />
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          State
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="State"
              required
            />
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Country
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Address 2"
              required
            />
          </div>

          <h2>Permanent Address</h2>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Address 1
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Address 1"
              required
            />
          </div>

<div>
          <label class="block text-gray-700 font-medium mb-2">
          Address 2
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Address 2"
              required
            />
          </div>

<div>
          <label class="block text-gray-700 font-medium mb-2">
          City
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="City"
              required
            />
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Zip / Postal Code
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Zip / State Code"
              required
            />
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          State
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="State"
              required
            />
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Country
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Address 2"
              required
            />
          </div>

          

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Address Proof Type:
  </label>

  <select name="" id=""  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"> 
  <option value="">—Please choose an option—</option><option value="Bank Pass Book">Bank Pass Book</option><option value="Digital Bonafide">Digital Bonafide</option><option value="Domicile">Domicile</option><option value="Driving License">Driving License</option><option value="Electricity Bill">Electricity Bill</option><option value="Gas Bill">Gas Bill</option><option value="Passport">Passport</option><option value="Ration Card">Ration Card</option><option value="Telephone Bill (Postpaid/Landline)">Telephone Bill (Postpaid/Landline)</option><option value="Voter Card">Voter Card</option>
  </select>
           
          </div>

          <div>
          <label class="block text-gray-700 font-medium mb-2">
          Address Proof Number:
  </label>
            <input
              type="text"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Address 2"
              required
            />
          </div>

          <div>
            <label
              for="email"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Scanned copy</label
            >
            <input
              type="file"
              id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Experience Year"
              required
            />
          </div>

          <div class="mb-4">
  <label class="block text-gray-700 font-medium mb-2">Capital (able to provide bank guarantee or pay cash in advance)</label>
  <div class="flex items-center space-x-4">
    <!-- Yes Option -->
    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="Yes" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
        required
      />
      <span class="text-gray-700">Above 50 LACS</span>
    </label>

    <!-- No Option -->
    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="No" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
      />
      <span class="text-gray-700">20-25 LACS</span>
    </label>

    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="No" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
      />
      <span class="text-gray-700">5-20 LACS</span>
    </label>

    <label class="flex items-center space-x-2">
      <input 
        type="radio" 
        name="pan_card" 
        value="No" 
        class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500"
      />
      <span class="text-gray-700">Buy in Cash</span>
    </label>

  </div>
</div>

          <div class="sm:col-span-2">
            <textarea
              id="message"
              rows="6"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Cover Letter"
            ></textarea>
          </div>

         

          <button
            style="background-color: red"
            type="submit"
            class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-danger-700 sm:w-fit hover:bg-danger-800 focus:ring-4 focus:outline-none focus:ring-danger-300 dark:bg-danger-600 dark:hover:bg-danger-700 dark:focus:ring-danger-800"
          >
            Send message
          </button>
        </form>
      </div>
    </section>


    
    <!-- Details 1 -->
    <div id="details" class="relative pt-12 relative pb-8 lg:pt-16">
     
      
      <div class="py-12 z-4">
        <div
          class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"
        >
          <!-- Happy Customers -->
          <div class="text-center bg-white p-4 shadow-lg rounded-lg">
            <div class="flex justify-center items-center mb-4">
              <div class="bg-gray-100 p-4 rounded-full">
                <i class="fas fa-users text-blue-500 text-4xl"></i>
              </div>
            </div>
            <div>
              <span
                id="counter-happy-customers"
                class="text-4xl font-bold text-gray-800"
                >0</span
              >
            </div>
            <p class="mt-2 text-gray-600">Happy Customers</p>
          </div>
          <!-- Enthusiastic Employees -->
          <div class="text-center p-4 shadow-lg bg-white rounded-lg">
            <div class="flex justify-center items-center mb-4">
              <div class="bg-gray-100 p-4 rounded-full">
                <i class="fas fa-users-cog text-green-500 text-4xl"></i>
              </div>
            </div>
            <div>
              <span
                id="counter-employees"
                class="text-4xl font-bold text-gray-800"
                >0</span
              >
            </div>
            <p class="mt-2 text-gray-600">Enthusiastic Employees</p>
          </div>
          <!-- KIOSK Centers -->
          <div class="text-center p-4 bg-white shadow-lg rounded-lg">
            <div class="flex justify-center items-center mb-4">
              <div class="bg-gray-100 p-4 rounded-full">
                <i class="fas fa-university text-purple-500 text-4xl"></i>
              </div>
            </div>
            <div>
              <span id="counter-kiosk" class="text-4xl font-bold text-gray-800"
                >0</span
              ><span class="text-2xl font-bold text-gray-800">+</span>
            </div>
            <p class="mt-2 text-gray-600">KIOSK Centers</p>
          </div>
          <!-- Digital Centers -->
          <div class="text-center p-4 shadow-lg bg-white rounded-lg">
            <div class="flex justify-center items-center mb-4">
              <div class="bg-gray-100 p-4 rounded-full">
                <i class="fas fa-server text-red-500 text-4xl"></i>
              </div>
            </div>
            <div>
              <span
                id="counter-digital-centers"
                class="text-4xl font-bold text-gray-800"
                >0</span
              ><span class="text-2xl font-bold text-gray-800">+</span>
            </div>
            <p class="mt-2 text-gray-600">Digital Centers</p>
          </div>
        </div>
      </div>
    
    </div>
    <!-- end of details 1 -->

    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <?php
        require '../footer.php';
    ?>
