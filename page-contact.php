<?php get_header(); ?>
	<section id="banner" class="banner--sm">
		<h1 class="banner--heading banner--sm-heading">
				Ask me anything
		</h1>
		<p class="p banner--tagline">
				Do you have an exciting idea that you want implementing? Or maybe you
				need ongoing technical support? Are you looking to build your online
				presence?
		</p>
	</section>
	<main>
		<section class="section contact">
			<h4 class="h4 contact--subheading">
					Whatever it is, I want to hear from you
			</h4>
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