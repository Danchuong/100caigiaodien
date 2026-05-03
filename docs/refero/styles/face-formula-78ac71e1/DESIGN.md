# Face Formula — Refero Style

- Refero URL: https://styles.refero.design/style/78ac71e1-cd4c-4b4d-bac5-e7e6c65cd3fa
- Site URL: https://faceformula.com
- ID: 78ac71e1-cd4c-4b4d-bac5-e7e6c65cd3fa
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T00:38:56.879Z
- Ranks: newest: 739, popular: 956, trending: 911

> serene Scandinavian minimalist

## Description

Face Formula cultivates a natural, understated aesthetic with a muted color palette dominated by cool greys and subtle blue-greys, echoing its Norwegian roots. Typography combines a classic serif for impactful headlines with a clean sans-serif for body text, creating a balanced and readable experience. Design elements are minimal, favoring delicate borders and ample white space over bold colors or heavy shadows. Components are lightweight, emphasizing content and a serene visual atmosphere.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Primary page background, elevated card surfaces |
| Ghost Fog | #f2f5f8 | neutral | Subtle background panels, light hover states, decorative borders. This is a very light, almost white grey |
| Border Mist | #e6ebee | neutral | Secondary background panels, subtle section dividers |
| Deep Ocean | #3b505a | brand | Primary text color, bold accents, brand elements, active states. This particular cool blue-grey defines the brand's primary visual identity |
| Text Slate | #202f3b | neutral | Darkest text for contrast on light backgrounds |
| Link Blue | #58737e | neutral | Secondary text, muted links, subtle button borders |
| Light Steel | #cfdce7 | neutral | Subtle button borders, decorative strokes, light element outlines |
| Black Ink | #000000 | neutral | Iconography, strong text emphasis, borders on dark elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Libre Caslon Condensed | Playfair Display | 400 | 32px, 52px, 120px | 1.00, 1.10, 1.20 | Headline typeface. Its delicate, almost whispery quality (despite large sizes) evokes a crafted, sophisticated brand rather than shouting for attention. letter-spacing reduces at smaller headline sizes. |
| Circular Pro | Inter | 400 | 12px, 13px, 15px, 16px | 1.00, 1.40 | Body copy, navigation, buttons, and all functional text. The slightly wider letter spacing gives it an airy, open feel, enhancing the minimalist aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1 | 0.12 |
| heading | 32 | 1.2 | -0.64 |
| heading-lg | 52 | 1.1 | -0.52 |
| display | 120 | 1 | -1.2 |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "16px",
  "sectionGap": "32px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button (Light)

**Role:** Header navigation links, inline text links.

backgroundColor: rgba(0, 0, 0, 0), color: Deep Ocean (#3b505a), border: none, padding: 0px.

### Ghost Navigation Button (Dark)

**Role:** Contextual navigation links against dark hero backgrounds.

backgroundColor: rgba(0, 0, 0, 0), color: Ghost Fog (#f2f5f8), border: none, padding: 0px.

### Contained Button

**Role:** Secondary action button for interactive elements.

backgroundColor: Ghost Fog (#f2f5f8), color: Link Blue (#58737e), border: none, padding: 0px 47.5px.

### Product Input Field

**Role:** Text input areas with a subtle border for user interaction.

backgroundColor: rgba(0, 0, 0, 0), color: Deep Ocean (#3b505a), borderBottom: 1px solid Deep Ocean (#3b505a), borderRadius: 0px, padding: 0px 14.8px 0px 0px.

### Bestseller Label

**Role:** Small, contained label for product features.

backgroundColor: Link Blue (#58737e), color: Ghost Fog (#f2f5f8), padding: 6px 6px, borderRadius: 0px.

## Do's

- Prioritize Deep Ocean (#3b505a) for primary textual content and interactive elements, establishing it as the dominant brand color.
- Use Libre Caslon Condensed (or Playfair Display) exclusively for major headings, leveraging its distinct serif character.
- Apply Circular Pro (or Inter) for all body text, navigation, and button labels, maintaining a consistent sans-serif voice.
- Ensure generous white space, particularly using Canvas White (#ffffff) and Ghost Fog (#f2f5f8) for background dilution and section separation.
- Use Border Mist (#e6ebee) for subtle background shifts to indicate different content blocks without heavy visual breaks.
- Set all border-radius values to 0px for a sharp, modern, and uncluttered appearance.
- Maintain a default element gap of 16px for consistent visual rhythm between components.

## Don'ts

- Avoid using bold or highly saturated colors outside of the defined brand palette for primary UI elements.
- Do not introduce strong shadows or excessive elevation; the design favors flat surfaces and subtle depth.
- Do not deviate from the specified 0px border-radius; rounded corners are not part of this aesthetic.
- Do not use generic system fonts for body or heading; the custom typefaces are critical to the brand identity.
- Avoid dense information placement; maintain the comfortable density and ample spacing.
- Do not use multiple font weights for Circular Pro; it is intended to be used at its regular weight 400 throughout.
- Do not use 'Action', 'CTA', 'primary action', or similar phrasing for buttons unless they explicitly have a #3b505a background or border, and prioritize un-filled, text-based button styles rather than solid fills where possible.

## Layout

The page primarily employs a max-width contained layout, with content centered. The hero section is full-bleed, overlaying large lifestyle photography with centered or left-aligned headlines and subtext. Section rhythm is created through alternating Canvas White and Ghost Fog background bands, with generous vertical spacing (32px section gap). Content often uses two-column arrangements, alternating text-left/image-right or vice-versa, or stacked centered blocks. There's a 3-column card grid in some sections, likely for product display. Navigation is a fixed top bar with ghost text links.

## Imagery

The site uses high-quality, product-focused photography and natural lifestyle imagery featuring models with clear, healthy skin. Photography is usually full-bleed in hero sections, serving as a backdrop for textual content. Product visuals are crisp, isolated shots on clean white or solid color backgrounds. There are small decorative landscape images. Iconography is minimalist, outlined, and monochromatic, primarily using Black Ink (#000000) or Deep Ocean (#3b505a), maintaining a light stroke weight. Imagery is primarily decorative and atmospheric but also showcases product details.

## Similar Brands

| Business | Why |
| --- | --- |
| aesop.com | Shares a sophisticated, minimalist aesthetic with clean typography, muted palette, and a focus on product photography. |
| byredo.com | Exhibits a similar elegant, understated design, featuring large lifestyle imagery, minimal UI, and a refined serif-sans font pairing. |
| frama.com | Uses a comparable Scandinavian-inspired design with generous white space, subtle color variations, and a focus on natural textures and light. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #3b505a
background: #ffffff
border: #cfdce7
accent: #3b505a
primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section with a full-bleed background image. Overlay a headline 'Skin changes with the season' using Libre Caslon Condensed weight 400, size 52px, lineHeight 1.1, letterSpacing -0.52px, color #f2f5f8. Below it, a subtext 'Support skin function through spring's shifts' using Circular Pro weight 400, size 15px, lineHeight 1.4, letterSpacing 0.3px, color #f2f5f8. Include a 'SHOP NOW' ghost link beneath that, using Circular Pro weight 400, size 15px, lineHeight 1.4, letterSpacing 0.3px, color #f2f5f8, no border or background.
2. Create a content section starting with 'Rooted in Norway. Guided by biology.' using Libre Caslon Condensed weight 400, size 32px, lineHeight 1.2, letterSpacing -0.64px, color #3b505a. Follow it with a two-column layout: an image on the left and supporting text on the right using Circular Pro weight 400, size 15px, lineHeight 1.4, letterSpacing 0.3px, color #3b505a. The section has a Canvas White (#ffffff) background.
3. Design a product card: background Canvas White (#ffffff), no border-radius. Title 'Essential Formula' using Circular Pro weight 400, size 15px, lineHeight 1.4, letterSpacing 0.3px, color #3b505a. Price '€37,95' using Circular Pro weight 400, size 15px, lineHeight 1.4, letterSpacing 0.3px, color #3b505a. Include a 'Bestseller' label using Link Blue (#58737e) background, Ghost Fog (#f2f5f8) text, 0px radius, 6px padding. The card padding is 0px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509512392-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509512392-thumb.jpg |
