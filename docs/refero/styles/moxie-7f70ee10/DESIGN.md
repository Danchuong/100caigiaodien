# Moxie — Refero Style

- Refero URL: https://styles.refero.design/style/7f70ee10-123b-43cc-bd04-498cfc5b5ac0
- Site URL: https://moxiegrouppr.com
- ID: 7f70ee10-123b-43cc-bd04-498cfc5b5ac0
- Theme: dark
- Industry: agency
- Created: 2026-04-30T02:52:24.540Z
- Ranks: newest: 278, popular: 1023, trending: 1040

> Midnight velvet, shimmering ink

## Description

Moxie embraces a dark, atmospheric interface where rich blacks and deep grays provide a dramatic backdrop for subtle typography and a singular, vivid blue accent. Content appears on soft, low-contrast surfaces, outlined by fine borders, creating a quiet depth rather than sharp separation. Typography is a deliberate interplay of classic serifs for impact and clean sans-serifs for detail, all rendered in a warm, near-white hue that feels inviting against the dark theme. The overall aesthetic is one of understated authority, with controlled bursts of color for key interactive elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Background Ink | #000000 | neutral | Page background, primary dark surface |
| Parchment White | #f4efd4 | neutral | Primary text, icon fill, ghost button text and borders, outline for cards |
| Twilight Gray | #626055 | neutral | Muted text, secondary borders, subtle dividers |
| Deep Shadow | #333333 | neutral | Decorative borders, detailed link colors |
| Authority Blue | #84acfb | brand | Violet action color for filled buttons, selected navigation states, and focused conversion moments. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| IBM Plex Serif | Source Serif Pro | 300, 400, 500 | 17px, 22px, 26px, 28px, 43px, 55px | 1.10, 1.20 | Headlines and prominent display text – the delicate weight of 300 for larger sizes lends an antique, authoritative whisper, eschewing typical bold declarations. |
| IBM Plex Sans | Inter | 300, 400, 500 | 10px, 12px, 14px, 16px, 17px, 24px | 1.00, 1.20, 1.50 | Body copy, navigation, buttons, and functional interface elements – provides clarity and legibility for detailed information against a dark background. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1 |  |
| body | 14 | 1 |  |
| heading-sm | 22 | 1.1 |  |
| heading | 26 | 1.1 |  |
| heading-lg | 28 | 1.1 |  |
| display-sm | 43 | 1.1 |  |
| display | 55 | 1.1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "1000px",
    "cards": "13.8417px",
    "buttons": "1000px",
    "smallCards": "8.65108px"
  },
  "elementGap": "21px",
  "sectionGap": "107px",
  "cardPadding": "19px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Interactive element

Filled button with 'Authority Blue' background, 'Parchment White' text, and full pill-shaped '1000px' radius. Padding is 6.92px vertical, 20.76px horizontal. Background color is #84acfb, text color is #f4efd4.

### Ghost Outline Button

**Role:** Interactive element

Ghost button with a subtle 'Parchment White' border and text. The border is 1px, color #f4efd4, and radius is 1000px, creating a delicate pill shape. Text color is #f4efd4.

### Soft Border Card

**Role:** Content container

Content card with no background fill, a rounded border radius of 13.84px, and an interior padding of 19.03px on all sides. Border color is #626055, creating a subtle division.

### Client Logo Card

**Role:** Display brand logos

Transparent background cards for client logos, outlined with a 1px border in 'Parchment White' and a full pill-shaped radius of 1000px. Padding is minimal to contain the logo.

### Quote Card

**Role:** Testimonial display

Card with nearly square corners (0px), transparent background, generous padding of 19.03px on all sides. The content within relies on text color to stand out against the background.

## Do's

- Prioritize 'Background Ink' (#000000) for all page backgrounds to maintain the deep, dark aesthetic.
- Use 'Parchment White' (#f4efd4) for primary text and icon elements across the interface.
- Apply IBM Plex Serif with a weight of 300 for headlines to achieve an understated, elegant authority.
- Employ the 'Authority Blue' (#84acfb) exclusively for primary interactive elements, such as button backgrounds and key accents, to create high-impact punctuation.
- Utilize a 1000px border-radius for all interactive buttons and tags to ensure a consistent pill-shaped appearance.
- Maintain comfortable density by using 19px for card padding and 21px for element gaps.
- Outline content cards and sections with subtle borders in 'Twilight Gray' (#626055) or 'Parchment White' (#f4efd4) rather than using strong background fills.

## Don'ts

- Avoid using bright or overly saturated colors beyond 'Authority Blue' to prevent distracting from the dark, sophisticated palette.
- Do not use heavy box shadows; the system relies on subtle borders and transparent fills for depth.
- Refrain from using bold or heavy weights for IBM Plex Serif headlines; the system's impact comes from lightness and restraint.
- Do not introduce additional sans-serif fonts; stick to IBM Plex Sans for all functional text.
- Avoid large blocks of filled background colors for cards or content sections; prefer transparent or subtly bordered containers.
- Do not deviate from the defined border radii; maintain 1000px for buttons and tags, and 13.84px/8.65px for cards.
- Do not use generic system greys; ensure all achromatic elements align with 'Parchment White','Twilight Gray', or 'Deep Shadow'.

## Layout

The page primarily uses a full-bleed dark background and a centered content area with varying widths. The hero section features a large, centered headline (IBM Plex Serif) over an unadorned dark expanse, immediately establishing the brand's quiet authority. Subsequent sections alternate between full-width presentations (like client logos) and more structured content blocks, often laid out with alternating text-left/visual-right patterns. Testimonials are presented in a horizontal scroll arrangement of transparent cards with subtle borders. Vertical spacing between sections is generous, contributing to a spacious feel despite the content density. Navigation is a minimal top bar with a hamburger menu and a single 'Become a Client' button, reinforcing the uncluttered aesthetic.

## Imagery

The site uses minimal imagery, primarily relying on embedded videos or product shots within framed containers. When present, images are contained within cards, often with rounded corners or subtle borders, blending into the dark interface without harsh edges. There's an implied focus on product showcases or testimonials through video content, rather than decorative photography. Icons are outlined, typically monochrome using 'Parchment White', with thin stroke weights, providing functional clarity without visual clutter. The density is image-light, text-dominant, with visuals serving an explanatory or evidence-based role.

## Similar Brands

| Business | Why |
| --- | --- |
| Framer | Dark UI with subtle accent colors and sophisticated typography, relying on transparency and fine borders for component structure. |
| Linear | Primarily dark theme, focus on clear information hierarchy with minimal chromatic accents, and understated text styles. |
| Vercel | Dark aesthetic with high contrast text, occasional use of vivid blues for interactive elements, and a clean interface devoid of heavy graphics. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #f4efd4
background: #000000
border: #626055
accent: #84acfb
primary action: #84acfb (filled action)

### 3-5 Example Component Prompts
1. Create a Primary Action Button: #84acfb background, #333333 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a ghost button for secondary actions: 1px border in Parchment White (#f4efd4), text in Parchment White (#f4efd4) using IBM Plex Sans weight 400 at 16px, full pill shape (1000px radius).
3. Generate a testimonial card: transparent background, rounded corners (13.8417px radius), 19px padding all around. Body text in Parchment White (#f4efd4) using IBM Plex Sans weight 400 at 14px.
4. Create a hero headline: Centered, using IBM Plex Serif weight 300 at 55px, color Parchment White (#f4efd4).
5. Build a client logo section: Display client logos within transparent cards with a 1px border in Parchment White (#f4efd4), 1000px radius, minimal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517526528-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517526528-thumb.jpg |
