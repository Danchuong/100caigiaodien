# Podcorn — Refero Style

- Refero URL: https://styles.refero.design/style/8d4b0738-c302-45c6-98c9-b3cd36e04613
- Site URL: https://podcorn.com
- ID: 8d4b0738-c302-45c6-98c9-b3cd36e04613
- Theme: light
- Industry: media
- Created: 2026-04-30T03:37:04.738Z
- Ranks: newest: 111, popular: 841, trending: 785

> Soft-edged digital canvas

## Description

Podcorn's design system channels a playful yet professional aesthetic through a light, spacious canvas. Dominated by a soft coral-tinged white and deep indigo accents, the interface feels inviting while maintaining clear hierarchy. Typography is compact and confident, paired with a distinct rounded-corner treatment for button-like elements that softens edges. Decorative illustrations provide visual delight without distracting from content, ensuring a streamlined user experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Pink | #fff4f2 | neutral | Page backgrounds, section separators, underlaying a delicate blush |
| True White | #ffffff | neutral | Card surfaces, button backgrounds, primary text for dark backgrounds, navigation elements |
| Inkwell Indigo | #090335 | brand | Primary text, main CTAs, active states, important headings — establishes a strong, professional presence |
| Deep Ocean | #132645 | brand | Decorative illustration elements, secondary text that still needs good contrast |
| Coral Sunset | #ffb0a1 | accent | Accent in illustrations, occasional decorative highlights |
| Firebrick Red | #fc736c | accent | Red wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |
| Ash Gray | #434352 | neutral | Muted text, inactive navigation items, subtle borders |
| Stone Grey | #8993a2 | neutral | Hairline borders, subtle dividers, less emphasized elements |
| Outline Gray | #d8d8d8 | neutral | Border for ghost buttons and card outlines |
| Charcoal Black | #000000 | neutral | Strongest text contrast, decorative elements in illustrations when crisp contrast is needed |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Gilroy | Inter | 400, 500, 600, 700 | 14px, 15px, 16px, 18px, 20px, 22px, 25px | 1.00, 1.13, 1.20, 1.57, 1.58, 1.67, 1.70, 1.88 | Provides a clean, geometric sans-serif for most UI elements, including body text, navigation, and buttons. Its compact tracking at smaller sizes gives it a modern, efficient feel, while larger text is more generously spaced. |
| Georgia | Lora | 400, 700 | 21px, 27px, 40px | 1.44 | Used sparingly for headings, its seriffed elegance adds a touch of classic sophistication, contrasting with the geometric sans-serif to create hierarchical distinction. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.58 | -0.19 |
| body | 16 | 1.67 | -0.19 |
| subheading | 18 | 1.57 | -0.19 |
| heading | 25 | 1.2 | -0.19 |
| heading-lg | 40 | 1.44 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "modal": "8px",
    "buttons": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "75px",
  "cardPadding": "55px",
  "pageMaxWidth": "1105px"
}
```

## Components

### Filled Primary Button

**Role:** Primary action button

Solid Inkwell Indigo background with True White text. Sharp, square corners at 0px radius. Padding: 18px vertical, 20px horizontal. Strong visual call to action.

### Outlined Secondary Button

**Role:** Secondary action button, ghost style

True White background with Inkwell Indigo text and a 1px Inkwell Indigo border. Sharp, square corners at 0px radius. Padding: 18px vertical, 20px horizontal. Less visually dominant than the primary.

### Navigation Button

**Role:** Navigational link within the header

A Firebrick Red background with a 0px border radius and 11px vertical, 14-20px horizontal padding. White text, typically Georgia Bold.

### Navigation Link

**Role:** Standard navigation text link

Ash Gray text for inactive states. When active, text shifts to Inkwell Indigo or uses a Firebrick Red background for button-style entries. No distinct background or border.

### Content Card

**Role:** Container for content sections

Transparent background with no box shadow or border, relying on Canvas Pink background for visual separation. Padding 75px vertical, 55px horizontal. Corners are sharp at 0px radius.

### Cookie Consent Modal

**Role:** Overlay for cookie preferences

True White background with 8px border radius. Features a mix of Inkwell Indigo and Ash Gray text for instructions, and a specific Outline Gray border for internal action buttons.

## Do's

- Use Inkwell Indigo (#090335) for primary action backgrounds and all major headings.
- Always apply a 0px border-radius to all buttons and cards, maintaining sharp, clean edges.
- Utilize Canvas Pink (#fff4f2) as the foundational background color for most page sections.
- Reserve Firebrick Red (#fc736c) sparingly for high-visibility navigation buttons or active states.
- Employ Gilroy for all body text, navigation items, and button labels, applying '-0.1870em' letter spacing for compact readability.
- Ensure all interactive elements like buttons and navigation links have a minimum vertical padding of 18px and horizontal padding of 20px.
- Structure pages with a maximum content width of 1105px, horizontally centered.

## Don'ts

- Do not introduce rounded corners on any primary UI elements unless specifically for a modal or pop-up like the cookie consent (8px).
- Avoid using highly saturated, non-brand colors outside of illustrations, restricting the palette to Inkwell Indigo, Firebrick Red, and neutral tones.
- Do not deviate from the specified Gilroy and Georgia font families; introducing other typefaces will disrupt the brand's typographic consistency.
- Do not use generic gray tones for text. Instead, use Ash Gray (#434352) for muted text and Inkwell Indigo (#090335) for primary text.
- Avoid heavy drop shadows or complex gradients. The design relies on flat surfaces and clear color contrasts.
- Do not use smaller padding than 18px vertically / 20px horizontally for buttons. Maintain the generous button sizing.
- Do not place content that extends beyond the 1105px main content width.

## Layout

The page primarily uses a contained, centered layout with a maximum width of 1105px for content. The hero section can be full-bleed with a large background illustration, featuring a prominent centered headline and action buttons. Vertical rhythm is established through consistent section gaps (around 75px), often with alternating background colors between True White and Canvas Pink. Content sections frequently employ a two-column layout with text on one side and an illustrative graphic on the other. Navigation is a sticky top bar with brand coloring and bold action buttons.

## Imagery

The site uses lively, playful line illustrations with bright, moderate, and vivid custom color palettes (Coral Sunset, Deep Ocean, Firebrick Red) set against a white or Canvas Pink background. Illustrations are used decoratively to add personality and visually segment content, rather than to convey specific product points. They typically feature outlined figures and abstract shapes, often enclosed within a simple square or rectangular frame, and sometimes integrate subtle brand color accents. Icons are generally minimalist and outlined, mirroring the illustration style.

## Similar Brands

| Business | Why |
| --- | --- |
| Airtable | Shares a clean, bright aesthetic with playful illustrations and strong, defined brand colors for UI elements. |
| Mailchimp | Similar use of expressive, often abstract illustrations to add character to a professional, clean interface. |
| Webflow | Employs a precise, structured layout with strong typography and minimal visual clutter, relying on color for accents and hierarchy. |
| Canva | Combines a bright, accessible interface with clear content hierarchy and distinct, colorful calls to action. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #090335
background: #fff4f2
border: #434352
accent: #fc736c
primary action: #090335 (filled action)

Example Component Prompts:
Create a hero section with a centered headline: 'Monetization your way.' using Georgia weight 700 at 40px, #090335, normal letter spacing. Below it, a 'For Brands' button with #090335 background, #ffffff text, 0px radius, 18px vertical, 20px horizontal padding, and a 'For Podcasters' button with #ffffff background, #090335 text, #090335 border, 0px radius, 18px vertical, 20px horizontal padding. The background of the hero section is Canvas Pink (#fff4f2).

Create a content card for 'Monetize Effortlessly': no background (transparent), no border, no shadow, 0px radius. Inside, use a heading 'Monetize Effortlessly' at 25px Gilroy weight 700, #090335, letter spacing -0.1870em. The body text is Gilroy weight 400 at 16px, #090335, lineHeight 1.67, letter spacing -0.1870em. Card padding is 75px vertical, 55px horizontal.

Generate a top navigation bar: Canvas Pink (#fff4f2) background. Left aligned logo. Right aligned links for 'Podcasters', 'Brands' (Gilroy weight 400, 16px, #434352, letter spacing -0.1870em). A 'Sign Up' button with Firebrick Red (#fc736c) background, #ffffff text, 0px radius, 11px vertical, 14px horizontal padding. A 'Log In' button with #ffffff background, #090335 text, #d8d8d8 border, 0px radius, 11px vertical, 14px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520202811-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520202811-thumb.jpg |
