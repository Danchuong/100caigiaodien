# WePresent — Refero Style

- Refero URL: https://styles.refero.design/style/1203f8b5-f7ef-4960-96c1-145143909910
- Site URL: https://wepresent.wetransfer.com/story/marina-abramovic-traces
- ID: 1203f8b5-f7ef-4960-96c1-145143909910
- Theme: dark
- Industry: media
- Created: 2026-04-30T02:37:03.772Z
- Ranks: newest: 335, popular: 740, trending: 570

> Dramatic editorial contrast

## Description

WePresent adopts an editorial, deep-contrast aesthetic designed for immersive digital experiences. Its visual system pairs dark, luxurious backgrounds with stark white typography, creating a gallery-like atmosphere. The design emphasizes clear boundaries through prevalent outline styles for interactive elements, reinforcing a sense of curated content behind a frame. Typography is confident and expressive, balancing classic elegance with modern readability, while accent colors are restrained, used primarily for subtle interactive cues.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Roast | #000000 | neutral | Page backgrounds, elevated card surfaces, primary text color for light backgrounds |
| Canvas White | #ffffff | neutral | Interface text, button text on dark backgrounds, primary borders, card backgrounds on light sections |
| Flame Accent | #fd4344 | accent | Outlined button borders, subtle interactive highlights, decorative accents in UI elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| FaktProBlond | Montserrat | 400 | 10px, 13px, 14px, 16px, 18px, 21px, 22px | 1.00, 1.20, 1.35 | Body text, navigation links, and most informational elements. Its clean, sans-serif structure ensures readability across varying sizes. |
| FaktProMedium | Montserrat | 400 | 15px | 1.00 | Used for specific secondary text elements, providing a slightly more pronounced weight than FaktProBlond without over-emphasizing. |
| GTAlpinaStandardThinItalic | Playfair Display Italic | 400 | 13px, 22px | 1.00, 1.35 | Headline display font, used for artistic titles and short, impactful statements. Its thin italic form creates a sophisticated, editorial signature. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.35 |  |
| heading-sm | 18 | 1.35 |  |
| heading-lg | 22 | 1 | -0.33 |

## Spacing & Shape

```json
{
  "radius": {
    "all": "0px"
  },
  "elementGap": "5px",
  "sectionGap": "40px",
  "cardPadding": "35px",
  "pageMaxWidth": null
}
```

## Components

### Outline Button (Dark)

**Role:** Primary Call to Action

Ghost button with no background, 'Canvas White' text and a 1px 'Canvas White' border. Padding is 35px horizontal, 40px bottom, 35px top. Sharp 0px border-radius emphasizes the structured design.

### Outline Button (Light)

**Role:** Primary Call to Action on Dark Backgrounds

Ghost button with no background, 'Midnight Roast' text and a 1px 'Midnight Roast' border. Padding is 35px horizontal, 40px bottom, 35px top. Sharp 0px border-radius.

### Image Card (Dark)

**Role:** Content container for images

Transparent background, 0px border-radius, no shadow. Used for showcasing visual content without added visual weight. All padding is 0px directly around the image.

### Image Card (Light)

**Role:** Content container for images on Light Backgrounds

Canvas White background, 0px border-radius, no shadow. Used when a clear content boundary is needed on a lighter section. All padding is 0px directly around the image.

## Do's

- Prioritize 'Midnight Roast' and 'Canvas White' for most background and text pairings to maintain high contrast and dramatic readability.
- Use FaktProBlond for all body text, links, and minor UI elements, ensuring good readability at sizes from 10px to 22px with a letter-spacing of -0.0150em.
- Reserve GTAlpinaStandardThinItalic exclusively for headlines and impactful titles, leveraging its unique italic style for brand distinctiveness.
- Apply 0px border-radius to all interactive elements and content containers for a consistently sharp, intentional aesthetic.
- Frame interactive elements like buttons with a 1px border using 'Canvas White' on dark backgrounds or 'Midnight Roast' on light backgrounds.
- Maintain a spacious density; use 40px for section gaps and 35px for internal card padding to give content ample breathing room.

## Don'ts

- Avoid using saturation to differentiate interactive states; rely on border-only outlines and text color changes.
- Do not introduce rounded corners; commit to a rectilinear visual language across all components and layouts.
- Do not use drop shadows for elevation; surfaces should rely on background color changes or clear border distinctions.
- Avoid mixed-case typography for headlines; stick to all-caps or title-case as dictated by content, but maintain the specified font and weight.
- Do not use 'Flame Accent' as a background color for major elements; it is reserved for subtle interactive cues and decorative details.
- Do not vary letter spacing from -0.0150em for FaktProBlond or GTAlpinaStandardThinItalic; consistent tight tracking is key to its brand identity.

## Layout

The page exhibits a full-bleed layout on a dark background, establishing an immersive, almost theatre-like experience. The hero section features a centered, high-contrast headline and supporting text with an outlined call-to-action button, conveying an editorial and focused entry point. Content arrangement is primarily stacked vertically, allowing ample whitespace and leading. The general approach seems to be max-width content blocks within the full-bleed canvas, ensuring readability without a strict pageMaxWidth, rather using generous horizontal padding or margins to frame the text.

## Imagery

This site predominantly uses a 'no imagery, pure UI' approach for foundational elements. When images are present (not explicitly in provided data but implied by card components), they are expected to be full-bleed or contained within sharp, borderless structures, treated as content rather than decorative UI. The overall impression leans towards a dark, immersive canvas that foregrounds textual and interactive elements, suggesting minimal, high-impact visuals if any.

## Similar Brands

| Business | Why |
| --- | --- |
| The New York Times | Similar editorial, high-contrast black-on-white (or white-on-dark) typographic aesthetic with a focus on clear hierarchy and minimal decorative elements. |
| A24 | Employs an art-house, cinematic design with bold typography and a preference for dark themes and stark visual treatments. |
| Nowness | Focuses on curated cultural content with a clean, grid-based layout, strong typographic choices, and an emphasis on visual storytelling. |
| Apple (Product Pages) | High-contrast text on dark backgrounds, large display typography, and a 'less is more' approach to interface elements. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #ffffff
background: #000000
border: #ffffff
accent: #fd4344
primary action: #fd4344 (outlined action border)

### 3-5 Example Component Prompts
1. Create a Dark Outlined Button: no background, 'Canvas White' text in FaktProBlond weight 400 at 14px, a 1px 'Canvas White' border, 0px border-radius, with 35px horizontal padding, 40px bottom padding, and 35px top padding.
2. Create a Hero Section Text Block: 'Midnight Roast' background. Title with 'Marina Abramovic' in GTAlpinaStandardThinItalic weight 400 at 22px, letter-spacing -0.0150em, 'Canvas White'. Subheading text: FaktProBlond weight 400 at 16px, 'Canvas White', with 40px bottom margin.
3. Create a descriptive paragraph: FaktProBlond weight 400 at 14px, 'Canvas White' text, with 5px bottom margin for line spacing.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516603442-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516603442-thumb.jpg |
