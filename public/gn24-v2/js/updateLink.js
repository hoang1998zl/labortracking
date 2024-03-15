$(document).ready(function () {
    // Function to update the href attribute of the link with data from the server
    function updateLinkHref() {
        // Make an AJAX request to fetch user data

        $.ajax({
            url: "/fetch-user-data", // Replace with the actual endpoint
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            dataType: "json",
            success: function (userData) {
                const { accessToken, fmToken } = userData;
                const link1 = $("#dynamicLink1");
                const link2 = $("#dynamicLink2");
                const link1_1 = $("#dynamicLink1_1");
                const link2_1 = $("#dynamicLink2_1");

                const baseUrl1 = "https://file.weos.vn/";
                //   const baseUrl1 = 'http://27.71.233.126:3016/';
                const baseUrl2 = "https://id.weos.vn/";

                // Construct the full URL with query parameters
                const url1 = `${baseUrl1}?login=${fmToken}`;
                const url2 = `${baseUrl2}?key=${accessToken}`;

                // Set the href attribute of the link
                link1.attr("href", url1);
                link2.attr("href", url2);
                link1_1.attr("href", url1);
                link2_1.attr("href", url2);
            },
            error: function (xhr, status, error) {
                // Check the HTTP status code
                if (xhr.status === 500) {
                    // Server error (500) occurred, but we won't log the error to the console
                } else {
                    // Handle other error cases here or leave this block empty
                    console.error("Error fetching user data:", error);
                }
            },
        });
    }

    // Call the function to update the link when the document is ready
    updateLinkHref();
});
