<x-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-4xl text-white font-bold mb-6 text-center">Edit Profile</h1>

        <div class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-md mx-auto">
            <!-- Update Profile Information -->
            <div class="mb-6">
                <div class="max-w-xl text-gray-300">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="mb-6">
                <div class="max-w-xl text-gray-300">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User Account -->
            <div class="mb-6">
                <div class="max-w-xl text-gray-300">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-layout>
