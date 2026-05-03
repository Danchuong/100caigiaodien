# Zoox — Refero Style

- Refero URL: https://styles.refero.design/style/e85a82b1-c70e-42de-8c42-4bd95dd5e047
- Site URL: https://zoox.com
- ID: e85a82b1-c70e-42de-8c42-4bd95dd5e047
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:38:40.979Z
- Ranks: newest: 741, popular: 758, trending: 656

> Muted, precise mobility.

## Description

Zoox employs a sophisticated, muted aesthetic, blending an off-black and white core with subtle, cool-toned neutrals and a singular vibrant teal accent. Typography is dominant, commanding attention with generous sizing and precise control over letter-spacing. Surfaces vary between stark white, dark gray, and a soft, desaturated teal, creating distinct visual sections without harsh transitions. Components are often outlined or ghosted, relying on subtle borders and rounded corners, avoiding heavy fills or deep shadows to maintain a lightweight, intentional feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #0d1212 | neutral | Primary text, deep section backgrounds, card backgrounds, dark input borders |
| Cloud Canvas | #ffffff | neutral | Page backgrounds, card surfaces, element fills, light iconography |
| Ash Gray | #565959 | neutral | Secondary text, footer text, placeholder text |
| Slate Green | #34484a | neutral | Decorative borders, active navigation states, button outlines, subtle background tints. A distinctive near-gray that grounds the palette |
| Pale Mint | #d3e4df | neutral | Soft section backgrounds, light card surfaces, subtle dividers |
| Fog | #696969 | neutral | Tertiary text, subtle borders |
| Stone Gray | #7b8889 | neutral | Heading subtext, less prominent body copy |
| Light Mist | #9aa3a5 | neutral | Iconography, muted body text details |
| Pale Sage | #edf4f2 | neutral | Badge backgrounds, subtle surface variations |
| Teal Accent | #64d5b3 | brand | Teal action color for filled buttons, selected navigation states, and focused conversion moments. |
| Muted Teal | #5b8279 | accent | Subtle decorative elements, less prominent accent text |
| Conic Wave | #34ffc5 | accent | Decorative background gradients, abstract visual elements, creating an ethereal halo effect |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Gt Standard S | Inter | 400, 500, 600, 700 | 12px, 13px, 14px, 15px, 16px, 20px, 23px, 30px, 40px, 50px | 0.75, 1.00, 1.15, 1.20, 1.25, 1.28, 1.30, 1.40, 1.50, 1.88, 2.64 | UI elements, body text, secondary headings, links, and buttons, providing consistent legibility and a compact, precise tone. Letter spacing is subtly tightened for all sizes to increase visual density. |
| Gt Standard L | Outfit | 400 | 28px, 36px, 56px, 120px | 1.10, 1.15, 1.20, 1.30 | Primary headings and large display text, creating impactful visual statements with their substantial size. These large sizes use normal letter spacing to maintain clarity. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.28 |  |
| body-sm | 13 | 1.28 |  |
| body | 14 | 1.28 |  |
| body-lg | 15 | 1.28 |  |
| heading-sm | 20 | 1.28 |  |
| heading | 23 | 1.28 |  |
| heading-lg | 30 | 1.28 |  |
| display-sm | 40 | 1.28 |  |
| display | 50 | 1.28 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "36px",
    "links": "12px",
    "badges": "20px",
    "inputs": "18px",
    "buttons": "16px",
    "navigation": "16px"
  },
  "elementGap": "5px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Nav Button

**Role:** Navigation and secondary actions

Text-only button with 'Slate Green' (#34484a) border and text color for outlined or active states. Features a small radius of 12px or 16px. Padding is minimal.

### Primary Action Button

**Role:** Call to action

Filled button with 'Teal Accent' (#64d5b3) background and 'Midnight Ink' (#0d1212) text. Features a 16px border radius, with 15px padding on all sides. Used for primary user actions.

### Outline Ghost Button

**Role:** Subtle secondary actions or interactive elements.

Transparent background with text in 'Ash Gray' (#565959) or 'Midnight Ink' (#0d1212). Borders are hairline or absent, with a very large border radius (33.33%).

### Neutral Card

**Role:** Content container

Transparent background, no shadow, with 20px left/right padding. Used for modular content blocks.

### Elevated Card (Pale Mint)

**Role:** Prominent content container

Background in 'Pale Mint' (#d3e4df), with a 36px border radius and no shadow. Provides 104px top padding and 40px bottom padding, creating a soft, elevated surface.

### Dark Card

**Role:** Thematic content container

Background in 'Midnight Ink' (#0d1212) with a 36px border radius. No padding, used for full-bleed content within its boundaries.

### Header Card (Slate Green)

**Role:** Section header background

Background in 'Slate Green' (#34484a) with no border radius. Provides 80px top and bottom padding.

### Text Input

**Role:** User data entry

White background with 'Midnight Ink' (#0d1212) text. Border color is 'Slate Green' (#34484a) or 'Stone Gray' (#7b8889), with a subtle 1px border. Features an 18px border radius and 20px horizontal padding.

### Neutral Badge

**Role:** Informational labels

Transparent background with 'Midnight Ink' (#0d1212) text. No border radius or padding, used inline for categorization.

### Soft Badge

**Role:** Categorization and status indicators

Background in `Pale Sage` (#edf4f2) with a slight opacity (40%), and 'Midnight Ink' (#0d1212) text. Features a 20px border radius and 7px vertical, 12px horizontal padding.

## Do's

- Use 'Gt Standard L' weight 400 for all primary headings (28px to 120px) with normal letter spacing to maximize impact.
- Apply 'Teal Accent' (#64d5b3) exclusively for primary action buttons or significant interactive highlights.
- Employ generously rounded corners (16px and 36px) on cards, buttons, and images to soften the overall aesthetic.
- Maintain high contrast between text ('Midnight Ink') and backgrounds ('Cloud Canvas', 'Pale Mint', or 'Slate Green') for optimal legibility.
- Utilize 'Pale Mint' (#d3e4df) for background sections to create soft visual breaks or subtle elevated surfaces.
- Implement 'Slate Green' (#34484a) for subtle borders, ghost button outlines, and interactive navigation elements.
- Ensure letter-spacing is consistently negative for 'Gt Standard S' typography in smaller sizes to maintain its compact appearance.

## Don'ts

- Do not introduce new vibrant colors outside of 'Teal Accent' (#64d5b3); maintain the muted and achromatic base palette.
- Avoid heavy use of drop shadows; reserve the subtle rgba(0, 0, 0, 0.2) 0px 0px 4px 0px shadow for very specific, subtle elevation.
- Do not use generic system fonts; stick to the 'Gt Standard S' and 'Gt Standard L' families for brand consistency.
- Avoid sharp corners on interactive elements or prominent containers; maintain the established rounded aesthetic.
- Do not use highly saturated backgrounds or overwhelming gradients in full sections; keep backgrounds understated with an occasional conic gradient as a decorative element.
- Refrain from using varied letter spacing on large display type ('Gt Standard L'); keep it 'normal' for maximum clarity.
- Do not create dense, busy layouts; prioritize comfortable spacing (40px section gap, 5px element gap) and ample whitespace.

## Layout

The page primarily uses a max-width contained layout, though specific sections like the hero or thematic backgrounds can be full-bleed. The hero often features a centered headline over a background image or a single color block (e.g., Pale Mint or Slate Green). Vertical rhythm is established through consistent section gaps, creating a comfortable density. Content is arranged using alternating text-left/image-right or image-left/text-right patterns, and in some areas, stacked centered elements. There are implicit grids for features, often two or three columns beneath larger headlines. Navigation is a persistent top bar with ghost buttons, converting to a hamburger menu on smaller viewports. Sticky headers are present, and the overall feel is spacious and organized.

## Imagery

The imagery features realistic photography of the Zoox robotaxi and interiors, or people interacting within the vehicle, shown in contained, often horizontally cropped or square formats. Treatment involves both full-bleed hero visuals and smaller, isolated images with substantial border-radii (16px to 36px) that soften their impact. Photography is clear, well-lit, and product-focused, showcasing the vehicle and user experience directly. Iconography is minimalist and monochrome, using black or dark gray outlines with a light stroke weight, serving primarily functional roles (e.g., play/pause button). Image density is balanced, used to break up text sections and illustrate features without overwhelming the page.

## Elevation

| Element | Style |
| --- | --- |
| Cookie Policy Card | rgba(0, 0, 0, 0.2) 0px 0px 4px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Waymo | Shares a similar muted, professional aesthetic with an emphasis on product clarity and subtle brand accents. |
| Cruise | Employs a clean, spacious layout with a restrained color palette and focus on typography for information hierarchy. |
| Volocopter | Features a light, airy design with minimal color usage and photography-driven sections to showcase innovative transportations. |
| Superhuman | Exhibits precise typographic control, tight letter-spacing, and a limited, high-contrast color palette with a single accent color. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0d1212
background: #d3e4df
border: #34484a
accent: #5b8279
primary action: #64d5b3 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #64d5b3 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
4. Design a navigation link: Text 'How To Ride' in 'Slate Green' (#34484a), 'Gt Standard S' weight 500, 15px, 0.0100em letter spacing. Ensure minimal 5px padding and a 12px border radius on hover.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509491848-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509491848-thumb.jpg |
