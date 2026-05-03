# SquadEasy — Refero Style

- Refero URL: https://styles.refero.design/style/3e5c272b-8d68-40d8-9726-b4d6914b4b16
- Site URL: https://www.squadeasy.com
- ID: 3e5c272b-8d68-40d8-9726-b4d6914b4b16
- Theme: light
- Industry: saas
- Created: 2026-04-30T03:09:16.402Z
- Ranks: newest: 217, popular: 509, trending: 316

> Playful block playground

## Description

SquadEasy's design system evokes a playful, high-contrast digital environment. It uses bold, unadorned typography set against vibrant, geometric color blocks and photo cutouts. The layout is dynamic, featuring angled visual elements and prominent typography to create a sense of directness and energy. Color is employed in large, flat regions and as vivid accents, while component styling is typically crisp with generous radii, prioritizing impact over subtle detail.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Amber Canvas | #e1c19e | brand | Primary page background for hero sections and expansive content zones, evoking a warm, inviting atmosphere |
| Deep Violet | #adabff | brand | Background for certain cards and content sections, adding depth and a distinct visual interruption to the warm canvas |
| Electric Lime | #e4ff60 | accent | Primary action background, indicating interactivity with a high-energy pop, and used for decorative fills |
| Sky Blue | #7fb6e6 | accent | Secondary button backgrounds and decorative elements, providing a cooler accent hue |
| Hot Pink | #ea5da3 | accent | Highlight text, decorative fills, and border accents, drawing immediate attention to key phrases and elements |
| Forest Green | #6fb853 | accent | Green accent for outlined action borders, linked labels, and lightweight interactive emphasis. Use as a supporting accent, not as a status color |
| Absolute Black | #000000 | neutral | Primary text, borders, and solid button fills, providing strong contrast against all backgrounds |
| Pure White | #ffffff | neutral | Secondary text, button text on dark backgrounds, and footer background, acting as a clean counterpoint |
| Soft Gray | #f6f6f6 | neutral | Subtle background for UI elements, offering a slight visual break from pure white |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Body | Inter | 400, 500, 700 | 14px, 16px, 17px, 18px, 19px, 22px | 1.00, 1.20, 1.21 | General body text, links, and various UI elements. Its range of weights and sizes provides versatility for content hierarchy and interactive states. |
| Black | Oswald | 400, 700 | 16px, 50px, 56px, 62px, 80px, 110px, 220px | 0.87, 1.00, 1.05, 1.20 | Dominant font for headings and impactful display text. Its inherent boldness, combined with tight line heights and negative letter-spacing, creates a commanding, space-efficient presence. |
| Regular | Open Sans | 400 | 14px, 16px, 18px, 22px | 1.20, 1.21 | Used for specific button labels and navigation items, offering a slightly more relaxed feel than 'Body' to contrast interactive elements. |
| Medium | Inter | 400 | 12px, 14px, 16px | 1.20 | Small text and button labels, maintaining legibility at smaller sizes with slightly tighter tracking. |
| Arial | Arial | 400 | 13px | 1.20 | Fallback or specific utility text, relying on system font accessibility. |
| Sharpie | Comic Neue | 400 | 16px | 1.20 | Specific decorative text, providing a distinctive, hand-drawn aesthetic. |
| Epilogue | Epilogue | 400 | 18px | 1.20 | Used for distinctive button labels, offering a subtle, elegant touch for important actions. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 | -0.252 |
| body-sm | 14 | 1.21 | -0.252 |
| body | 16 | 1.2 | -0.256 |
| subheading | 18 | 1.2 | -0.252 |
| heading-sm | 22 | 1.2 | -0.242 |
| heading | 50 | 1.05 | -1.6 |
| heading-lg | 56 | 1 | -1.4 |
| display | 80 | 0.87 | -2.88 |

## Spacing & Shape

```json
{
  "radius": {
    "misc": "10px",
    "cards": "0px",
    "buttons": "100px",
    "navElements": "14px"
  },
  "elementGap": "16px",
  "sectionGap": "100px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Text Link Button

**Role:** Navigation and secondary actions.

Transparent background, 'Absolute Black' text or 'Pure White' on dark backgrounds. No border, 'Regular' or 'Body' font family at 16px, 0px border radius, 16px padding on all sides for clickable area.

### Pill Ghost Button (Black)

**Role:** Outlined secondary actions.

Transparent background, 'Absolute Black' text, 100px border radius, with a 1px 'Absolute Black' border. No horizontal/vertical padding detected, suggesting an icon button or minimal text treatment.

### Pill Ghost Button (White)

**Role:** Outlined secondary actions on dark backgrounds.

Transparent background, 'Pure White' text, 100px border radius, with a 1px 'Pure White' border. No horizontal/vertical padding detected, suggesting an icon button or minimal text treatment.

### Pill Filled Button (Black)

**Role:** Primary action within a neutral context.

'Absolute Black' background, 'Pure White' text, 100px border radius, 16px vertical padding, 14px horizontal padding on right and 16px on left.

### Pill Filled Button (Electric Lime)

**Role:** Prominent calls to action.

'Electric Lime' background, 'Absolute Black' text, 100px border radius, 16px padding. This is the most persuasive button style.

### Info Card (Squared)

**Role:** Content presentation with a distinctive background.

Background 'Deep Violet', 0px border radius, no box shadow, 40px top padding, 24px horizontal padding, 140px bottom padding. Large internal padding for generous content framing.

## Do's

- Always use 'Absolute Black' (#000000) for primary text on light backgrounds and 'Pure White' (#ffffff) on dark backgrounds.
- Apply a 100px border radius to all interactive buttons for a consistent, soft pill shape.
- Use 'Electric Lime' (#e4ff60) specifically for primary call-to-action button backgrounds.
- Employ 'Deep Violet' (#adabff) for prominent content cards to differentiate them from the main canvas.
- Layer large, angled photographic cutouts to create a dynamic and energetic visual composition.
- Utilize 'Black' font family at large sizes for headlines (50-220px) with tight line heights to ensure a commanding presence.
- Maintain a comfortable density with a base spacing unit of 4px and elemental gaps around 16px.

## Don'ts

- Do not use generic gray tones for primary interactive elements; always use chromatic colors for emphasis.
- Avoid subtle shadows or gradients on component surfaces; stick to flat, vibrant color blocks or crisp borders.
- Do not use small, delicate fonts for headlines; always leverage the 'Black' font family for impact.
- Never use square corners for buttons; always apply the 100px border radius for a distinct visual identity.
- Do not place images in simple, contained boxes; allow them to break out of their bounds or appear dynamically angled.
- Avoid highly ornate or complex typography; the system favors bold, direct, and efficient typefaces.
- Do not introduce additional background colors outside of the defined 'Amber Canvas', 'Deep Violet', 'Electric Lime', and 'Soft Gray' for major sections.

## Layout

The page primarily uses a full-bleed layout for background color blocks and hero sections, with text content often centered or presented in two-column arrangements. The hero features a bold, centered headline overlaying the 'Amber Canvas' background with dynamic, angled photo cutouts. Sections alternate between solid color backgrounds (like 'Amber Canvas' and 'Deep Violet') with strong vertical spacing provided by a section gap of 100px. Content blocks, such as testimonial cards, often use a grid-like structure. Elements within sections generally maintain a max-width for readability, but the backgrounds extend full-width. Navigation is a sticky top bar with a centered logo, text links, and a prominent pill-shaped CTA button.

## Imagery

Imagery primarily consists of high-contrast, candid lifestyle photography featuring diverse individuals, often cropped tightly and presented as angled, unmasked cutouts. These images are used decoratively to add a human element and dynamic energy, frequently layered over solid color blocks. Icons are minimal, utilizing bold strokes or fills in black or accent colors. Product screenshots are contained within device mockups, maintaining a clean, focused presentation.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Uses large, impactful typography, clear functional interface elements on neutral backgrounds, and strategic use of a limited, vibrant accent color for interaction and branding. |
| Linear | Combines a sense of modern playfulness with high-contrast elements, using bold text, geometric shapes, and a distinctive color palette. |
| Figma | Features a light theme with clear information hierarchy, strong typography, and a strategic application of playful, saturated colors for key UI elements and branding. |
| Notion | Employs a clean, spacious layout with a focus on powerful typography and functional colored elements that stand out against a generally light, minimalist canvas. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference**
- text: #000000
- background: #e1c19e
- border: #000000
- accent: #ea5da3
- primary action: #000000 (filled action)

**3-5 Example Component Prompts**
- Create a Primary Action Button: #000000 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
- Create a testimonial card: 'Deep Violet' background (#adabff), no border radius, 40px top padding, 24px horizontal padding, 140px bottom padding. Body text 'Body' 16px weight 400 #000000.
- Create a navigation link: No background, 'Absolute Black' text, 'Regular' 16px font, no border, no radius. Hover state: text changes to 'Hot Pink' (#ea5da3).
- Create a ghost button: Transparent background, 'Forest Green' (#6fb853) text, 1px 'Forest Green' (#6fb853) border, 100px radius. No padding specified by system, implying visual icon or minimal text.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518528106-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518528106-thumb.jpg |
