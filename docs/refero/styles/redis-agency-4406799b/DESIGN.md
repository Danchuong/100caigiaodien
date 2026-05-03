# Redis Agency — Refero Style

- Refero URL: https://styles.refero.design/style/4406799b-1586-4d84-aac9-e6acdee0f679
- Site URL: https://www.redis.agency
- ID: 4406799b-1586-4d84-aac9-e6acdee0f679
- Theme: dark
- Industry: agency
- Created: 2026-04-30T01:26:00.255Z
- Ranks: newest: 603, popular: 822, trending: 714

> Dramatic Midnight Sculpture

## Description

Redis Agency employs a dramatic, high-contrast dark-mode aesthetic, creating a sense of luxury and seriousness. It pairs large, elegant serif headlines with a compact sans-serif for body text, establishing clear typographic hierarchy. The overall feel is spacious, with generous negative space and minimal, highly rounded components that appear almost sculptural against the black canvas. Color is strictly controlled, centered around a stark black and white palette, accented only by brand-specific imagery or internal details that appear as subtle splashes of vibrancy.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Canvas | #000000 | neutral | Page backgrounds, large content blocks, foundational surfaces |
| Ghost White | #ffffff | neutral | Primary text, button backgrounds, outline borders, prominent UI elements that demand attention against the dark canvas |
| Slate Text | #808080 | neutral | Muted body text, secondary information, and borders for subtle segmentation. Provides softer contrast than pure white |
| Dark Stone | #333333 | neutral | Fine borders and subtle dividers, offering a very low-contrast separation on dark backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times New Roman | serif | 400 | 32px, 90px | 0.82, 1.05 | Hero headlines and major section titles. Its classic serif form and extremely tight tracking (subtly inverting common design rules) convey gravitas and exclusivity. |
| Suisseintl WebM | Arial | 400 | 14px, 16px, 18px, 24px, 36px, 38px | 1.16, 1.20, 1.40 | Body text, links, buttons, and general UI elements. Its compact, neutral sans-serif form ensures readability and efficiency across smaller text blocks, balancing the expressive headlines. |
| Editorialnew | Georgia | 100 | 14px | 1.20 | Occasional decorative or delicate text elements, its light weight suggesting an editorial, refined touch. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.4 | -0.8 |
| body | 16 | 1.4 | -0.8 |
| subheading | 24 | 1.2 | -0.8 |
| heading | 32 | 1.05 | -1 |
| heading-lg | 38 | 1.16 | -0.8 |
| display | 90 | 0.82 | -1 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "24px",
    "buttons": "40px",
    "default": "44px"
  },
  "elementGap": "22px",
  "sectionGap": "70px",
  "cardPadding": "25px",
  "pageMaxWidth": null
}
```

## Components

### Filled Primary Button

**Role:** Action button

Ghost White fill, Midnight Canvas text, 40px border-radius, padding of 25px horizontal and 7-9px vertical. Suisseintl WebM font, weight 400.

### Ghost Outline Link

**Role:** Navigation or secondary action link

Midnight Canvas background, Ghost White text, 1px Ghost White border, 24px border-radius. Padding based on content. No distinct hover background change, only text color to white if originally a softer grey.

### Zero-Padding Card

**Role:** Content card/container for case studies

Transparent background, 0px border-radius, no box shadow, 0px padding. Acts as a container for full-bleed content rather than a distinct card surface.

## Do's

- Prioritize Midnight Canvas (#000000) for all page and section backgrounds to maintain dramatic contrast.
- Use Times New Roman (400) with tight letter-spacing for headlines and Ghost White (#ffffff) for maximum impact.
- Employ Suisseintl WebM (400) for all body text, links, and buttons, using Ghost White (#ffffff) for primary text and Slate Text (#808080) for secondary details.
- Apply a 40px border-radius to all interactive elements like buttons to achieve a soft, rounded aesthetic.
- Maintain generous vertical spacing between sections, using the 70px sectionGap token.
- Utilize 1px Ghost White (#ffffff) borders for subtle delineation of content blocks or interactive elements.
- Ensure all primary call-to-action buttons use a Ghost White (#ffffff) background with Midnight Canvas (#000000) text for high visibility.

## Don'ts

- Avoid using highly saturated colors for backgrounds or large sections; reserve them strictly for imagery or small accents.
- Do not deviate from the specified font families; avoid system defaults or other decorative fonts.
- Never use hard-edged, 0px border-radius on interactive elements; always lean into the soft, rounded forms.
- Do not introduce shadows for elevation, as the design relies on stark color contrast and negative space for hierarchy.
- Avoid dense information blocks; maintain the spacious and minimalist approach.
- Do not apply excessive letter-spacing to Suisseintl WebM; maintain its compact character with -0.8em tracking.
- Do not use Slate Text (#808080) for primary headlines or critical information where maximum contrast is required.

## Layout

The page primarily uses a full-bleed layout on a Midnight Canvas background, featuring large, dramatic sections. The hero section displays a centered headline with hero imagery. Content sections alternate between visually dominant imagery and text blocks, often with a centered stack approach for headlines and body text. There is a strong emphasis on spaciousness, with ample negative space defining the rhythm between content blocks. Navigation appears to be minimal, likely a top bar and potentially a hamburger menu for mobile, designed to recede and let the content shine.

## Imagery

The site uses a mix of highly stylized and abstract 3D renders (e.g., green organic blobs) and product-focused photography that often features single objects like radishes. Graphics are decorative and atmospheric, adding a sense of organic fluidity and surrealism against the stark UI. Iconography is minimalist, likely outlined or mono-colored, serving functional rather than decorative roles. Imagery is used to create mood and brand identity rather than explanatory content, often full-bleed or large-scale, dominating certain sections to create visual drama.

## Similar Brands

| Business | Why |
| --- | --- |
| Awwwards sites | Dramatic high-contrast themes, large experimental typography, and evocative 3D/abstract imagery. |
| Future Fonts | Focus on bespoke, expressive typography as a core design element, especially large serif headlines on dark backgrounds. |
| Active Theory | Use of abstract, organic 3D elements for atmospheric branding against dark backgrounds. |
| B&R Design | High-contrast dark-mode design with a sophisticated, minimalist approach and limited color palette. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #ffffff
accent: no distinct accent color
primary action: #ffffff (filled action)

Example Component Prompts:
1. Create a hero section: Midnight Canvas background. Headline at 90px Times New Roman weight 400, Ghost White, letter-spacing -1.0px. Subtext at 18px Suisseintl WebM weight 400, Slate Text, letter-spacing -0.8px, centered.
2. Create a Primary Action Button: #ffffff background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
3. Create a secondary text link: Ghost White text at 16px Suisseintl WebM weight 400, letter-spacing -0.8px. On hover, text color remains Ghost White. No background or border. Default underline on hover.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512341879-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512341879-thumb.jpg |
