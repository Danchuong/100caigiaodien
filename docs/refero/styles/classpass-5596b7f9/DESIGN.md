# ClassPass — Refero Style

- Refero URL: https://styles.refero.design/style/5596b7f9-09aa-4073-b283-4731425896e1
- Site URL: https://classpass.com
- ID: 5596b7f9-09aa-4073-b283-4731425896e1
- Theme: light
- Industry: other
- Created: 2026-03-27T18:53:38.000Z
- Ranks: newest: 990, popular: 402, trending: 526

> sunny fitness studio

## Description

This design system feels energetic and clear, like a fitness studio bathed in natural light with sharp accents. The bright blue calls attention to interactive elements, contrasting with a clean, predominantly achromatic background. Rounded corners and generous spacing soften the overall feeling, making the diverse offerings appear approachable and user-friendly, rather than overwhelming.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, critical UI elements, dark backgrounds for emphasis. |
| Cloud White | #ffffff | neutral | Page backgrounds, card surfaces, primary inverse text. |
| Steel Gray | #676767 | neutral | Secondary text, subtle borders, less emphasized body copy. |
| Deep Graphite | #111111 | neutral | Body copy on light backgrounds, providing strong contrast. |
| Sky Blue | #0055ff | brand | CTA buttons, interactive components, active states, links — signaling action and primary brand presence. |
| Sunshine Yellow | #fce172 | accent | Promotional banners, highlight sections — a warm, inviting accent. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| norms | Inter, Arial | 400, 500 | 12px, 14px, 16px, 18px, 36px | 1.00, 1.11, 1.33, 1.40, 1.43, 1.50 | Used for nearly all text, including body copy, links, navigation, buttons, and most headings. Its versatility makes it the staple for information delivery. |
| circuit | Montserrat, Georgia | 400 | 42px | 1.05 | Reserved for prominent headlines, offering a distinct visual voice for key messaging. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.43 |  |
| body | 16 | 1.5 |  |
| subheading | 18 | 1.33 |  |
| heading | 36 | 1.11 |  |
| display | 42 | 1.05 |  |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "9999px",
    "cards": "20px",
    "buttons": "9999px"
  },
  "elementGap": "8px",
  "sectionGap": "56-64px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Hero Modal Card



### Promotional Banner



### Button Group



### Secondary Call to Action Button

**Role:** CTA button

Outlined button with Cloud White background (rgba(0,0,0,0)), Sky Blue text (#0055ff), Sky Blue border (#0055ff), and a 'pill' shape (9999px border-radius). Padding is proportional to its primary counterpart.

### Ghost Header Button

**Role:** Header elements

Transparent background (rgba(0,0,0,0)), Midnight Ink text (#000000), no border, 0px border-radius. Used for header navigation and secondary actions. 16px horizontal padding.

### Inverse Ghost Header Button

**Role:** Header elements

Transparent background (rgba(0,0,0,0)), Cloud White text (#ffffff), no border, 0px border-radius. Used for header navigation in contexts with dark backgrounds. 16px horizontal padding.

### Modal Card

**Role:** Dialog, overlay

Cloud White background (#ffffff) with 20px border-radius, creating soft, welcoming pop-ups. Typically centered, with deep graphite body text and primary headlines. Generous internal padding (24-40px horizontal, 56px vertical) creating ample breathing room for content.

## Do's

- Prioritize Sky Blue (#0055ff) for all primary interactive elements like buttons and active navigation states.
- Use a 9999px border-radius for all primary and secondary buttons to maintain the 'pill' aesthetic.
- Apply 20px border-radius for larger card-like components to soften their appearance.
- Ensure headings use 'circuit' font at 42px/1.05 for primary messages, with 'norms' font for all other text sizes.
- Maintain high contrast text with Midnight Ink (#000000) or Deep Graphite (#111111) on white backgrounds or Cloud White (#ffffff) on Sky Blue.
- Utilize 8px as the base unit for all minor spacing, building up to 16px, 24px, and 40px for larger internal element separation.
- Use `Sunshine Yellow (#fce172)` exclusively for banner-type announcements to capture immediate attention.

## Don'ts

- Do not introduce new color hues; stick to Sky Blue, Sunshine Yellow, and the established neutrals.
- Avoid using square buttons or applying radii other than 9999px for interactive elements.
- Do not use 'circuit' font for body text or small labels; it is reserved for prominent headings.
- Avoid subtle contrast text on white backgrounds; always use Midnight Ink or Deep Graphite to ensure readability.
- Do not deviate from the established padding values; consistent spacing is key for visual harmony.
- Do not use shadows for elevation except where explicitly defined; depth is primarily created through background surfaces.
- Do not use background images directly on content cards; instead, feature photography as a mosaic behind UI elements.

## Layout

The overall page is a max-width contained layout, though the underlying background (a photographic mosaic) often extends full-bleed. The hero section features a prominent white modal overlay centered over the photographic grid, providing a clear call to action. Content sections primarily follow a stacked, centered approach within the modal, or a more dynamic grid of images on the main page. Navigation is a consistent top bar that remains static at 64px height. The density is relatively high due to the constant presence of imagery, but text is kept concise and well-spaced within its containers.

## Imagery

The site uses a dense, mosaic-like grid of high-quality, vibrant photography, exclusively featuring people engaged in fitness, wellness, and beauty activities. The images are full-bleed within their grid cells, uncropped or minimally cropped, and appear to be lifestyle shots rather than overly staged product placements. They are used decoratively to establish an energetic, aspirational atmosphere, occupying significant visual space relative to text. There are no illustrations or abstract graphics; the visual language is purely photographic, showcasing real people in real activities.

## Similar Brands

| Business | Why |
| --- | --- |
| Peloton | Shares a focus on energetic photography of people engaged in fitness against a clean UI, using strong primary colors as accents. |
| Nike | Similar use of dynamic, aspirational photography as a core visual element, paired with bold typography and a clear, functional interface. |
| Airbnb Experiences | Employs a grid of high-quality activity-focused photography with an overlayed, friendly UI and a bright, inviting color palette for engagement. |
| Apple Fitness+ | Combines a clean, light interface with vibrant, full-screen imagery of active individuals to create an engaging, aspirational experience. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #000000 (Midnight Ink)
- Background: #ffffff (Cloud White)
- CTA: #0055ff (Sky Blue)
- Border: #0055ff (Sky Blue) - for outlined buttons
- Accent: #fce172 (Sunshine Yellow)

### 3-5 Example Component Prompts
1. Create a `Primary Call to Action Button` with the text 'Sign Up Now'. It should be filled with Sky Blue, have Cloud White text, and a 9999px border-radius.
2. Design a `Modal Card` dialog titled 'Welcome to ClassPass'. The background should be Cloud White with a 20px border-radius. Include a `display` headline of 'One app for all things fitness' using `circuit` font, Midnight Ink text, and then a paragraph of `body` text using `norms` font and Deep Graphite color.
3. Implement a `Promotional Banner` at the top of the page. It should have a Sunshine Yellow background, Midnight Ink `body-sm` text saying '💥 Get 14 days free 💥' and 8px vertical padding.
4. Generate a `Secondary Call to Action Button` with the label 'Learn more'. It should have a transparent background, Sky Blue text, a Sky Blue border, and a 9999px border-radius.
5. Build a navigation link using `Ghost Header Button` style with the text 'How it works'. It should have Midnight Ink text, 0px border-radius, and 16px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932939184-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932939184-thumb.jpg |
