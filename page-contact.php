<?php get_header(); ?>
	<section id="banner" class="banner--sm">
		<h2 class="banner--heading banner--sm-heading">
				Let's build something great together
		</h2>
		<p class="p banner--tagline">
			Ask me anything. I'm happy to help.
		</p>
	</section>
	<main>
		<section class="section contact">
			<p class="contact--subheading">
			Do you have an exciting idea for a website that you want implementing by a web developer? Or maybe you
				need website maintenance? Are you looking to build your online
				presence on social media and search engines?
			</p>
			<form
				id="fs-frm"
				name="simple-contact-form"
				accept-charset="utf-8"
				action="https://formspree.io/xleppoel"
				method="post"
				>
			<fieldset id="fs-frm-inputs">
				<input type="hidden" name="_subject" value="New submission!" />
				<label for="full-name">Your full name</label>
				<input
					type="text"
					name="name"
					id="full-name"
                    placeholder="First and last name"
					required=""
				/>
				<label for="email-address">Your email address</label>
				<input
					type="email"
					name="_replyto"
					id="email-address"
					placeholder="email@domain.com"
					required=""
				/>
                <label for="message">Your message</label>
				<textarea
					rows="5"
					name="message"
					id="message"
					placeholder=""
					required=""
				></textarea>
			    <input
					type="hidden"
					name="_subject"
                    id="email-subject"
                    value="Contact Form Submission"
				/>
				</fieldset>
				<input type="submit" value="Send" />
			</form>
		</section>
	</main>

<?php get_footer(); ?>