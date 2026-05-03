# IDHEAL — Refero Style

- Refero URL: https://styles.refero.design/style/8d8d5861-dee0-431b-826d-56f3fa4e1f84
- Site URL: https://idheal.fr
- ID: 8d8d5861-dee0-431b-826d-56f3fa4e1f84
- Theme: light
- Industry: other
- Created: 2026-04-30T03:15:35.914Z
- Ranks: newest: 195, popular: 1087, trending: 1068

> Monochromatic academic blueprint

## Description

IDHEAL presents a clean, academic aesthetic, characterized by a high-contrast black and white foundation. Typography is the primary visual element, conveying a sense of authority and clarity. Color accents are minimal and serve as functional highlights for links and borders, rather than broad decorative elements. The overall feel is one of directness and seriousness, with a compact density and structured content flow.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink Black | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Canvas White | #ffffff | neutral | Page backgrounds, button fills, card surfaces |
| Subtle Gray | #e5e5e5 | neutral | Light borders, subtle backgrounds for content blocks, card backgrounds |
| Shadow Gray | #cccccc | neutral | Shadows for elevation, subtle dividers, button borders |
| Brick Red | #bc5346 | brand | Link accents, specific heading highlights, outlined action borders |
| Fuchsia Pink | #ff00bc | accent | Accent borders on interactive elements, secondary link emphasis |
| Moss Green | #51633c | accent | Informational text highlights, subtle content borders |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif |  | 400 | 15px, 67px | 1.00, 1.20 | General interface elements, default text where specific brand fonts are not applied. Its broad stroke makes it versatile but used sparingly for distinct brand identity. |
| Helvetica Neue LT Pro | Arial, Helvetica, sans-serif | 400 | 12px, 18px, 21px, 105px | 0.80, 0.95, 1.00, 1.17, 1.20 | Body text, list items, some button text. Provides a clean, modern readability. |
| Helvetica Neue LT Pro | Arial, Helvetica, sans-serif | 400 | 12px | 1.20 | Large headings and titles. The medium weight for headline sizes creates a strong visual presence without being overly bold, emphasizing institutional gravitas. |
| New Century Schoolbook LT Std | Georgia, serif |  |  |  | Navigation, some body text, and subheadings. The serif typeface introduces a classic, academic feel, contrasting with the sans-serif for hierarchy. |
| Helvetica Neue LT Pro | Arial, Helvetica, sans-serif | 400 | 16px | 1.10 | Subtle captions and secondary information where a lighter touch is desired. |
| NewCenturySchlbkLTStd-Roman |  | 400 | 16px, 18px, 21px, 23px, 39px, 43px | 0.95, 1, 1.08, 1.1 | NewCenturySchlbkLTStd-Roman — detected in extracted data but not described by AI |
| HelveticaNeueLTPro-Roman |  | 400 | 12px, 16px, 20px, 39px | 1, 1.1, 1.2 | HelveticaNeueLTPro-Roman — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body-sm | 15 | 1 |  |
| subheading | 20 | 1 |  |
| heading | 39 | 1.1 |  |
| heading-lg | 43 | 1.1 |  |
| display | 105 | 0.95 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "buttons": "15px",
    "navigationItems": "37.5px",
    "generalRoundedElements": "9.999px"
  },
  "elementGap": "10px",
  "sectionGap": "30px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Circular Ghost Button

**Role:** Tertiary action button, decorative element with text

White background, Ink Black text, Subtle Gray 1px border, 50% border radius for a circular shape. 10.5px padding on all sides. Creates a lightweight, tappable ghost element.

### Rounded Corner Ghost Button

**Role:** Outlined button for secondary actions or links

White background, Ink Black text, Ink Black 1px border with a 15px border radius. Padding of 6px top/bottom and 7.5px left/right. Provides a slightly more defined boundary than the circular variant.

### Borderless Content Card

**Role:** Container for content, particularly news items or listings

Transparent background with no border or shadow. 0px border radius, indicating a stark, grid-like composition without visual separation for content blocks. Implicit padding on content.

### Navigation Link

**Role:** Primary navigation items

Ink Black text, no background. Emphasizes text hierarchy with Ink Black text on Canvas White as the primary navigation style, leveraging the default link interaction.

### Headline Link with Accent

**Role:** Clickable headlines, leading to detailed content

Uses Ink Black text for the main headline, with an accent color (e.g., Brick Red) for a small following element like a 'read more' indicator or date delimiter, usually with an underline or border.

## Do's

- Prioritize Ink Black text (#000000) on Canvas White (#ffffff) backgrounds for all primary content.
- Use Helvetica Neue LT Pro Medium for large headings to establish a serious and authoritative tone.
- Punctuate long text blocks or lists with the New Century Schoolbook LT Std serif font to introduce an academic aesthetic.
- Utilize Subtle Gray (#e5e5e5) for thin borders and light backgrounds to suggest content grouping without heavy visual division.
- Apply 15px border radius to buttons for a soft, approachable feel, unless explicitly requiring a circular (50% / 9999px) form.
- Employ Brick Red (#bc5346) and Fuchsia Pink (#ff00bc) sparingly as outline borders or text highlights for interactive elements, not as solid backgrounds.
- Maintain compact spacing, typically 10px for element gaps and 30px for section gaps, to create a dense, content-rich layout.

## Don'ts

- Avoid using solid chromatic backgrounds for interactive elements; prefer outlined or text-only buttons with Ink Black text.
- Do not introduce gradients; the system relies on flat colors and typography for visual hierarchy.
- Refrain from using heavily rounded corners for cards; they should mostly be 0px radius to maintain a stark, precise structure.
- Do not deviate from the core monochromatic color palette for large sections or backgrounds; color is reserved for functional accents.
- Avoid decorative imagery that competes with text; imagery should be minimal or serve a clear, illustrative purpose.
- Do not use overly expressive or casual typography; maintain a formal and academic tone through the selected sans-serif and serif pairings.
- Do not introduce complex shadow patterns; limit elevation to a subtle rgba(0, 0, 0, 0.2) 4px 2px 4px 0px or rgb(237, 237, 237) 2px -1px 6px 0px for discrete layering.

## Layout

The page primarily follows a centered, contained layout, though the hero section might be full-bleed. The hero consists of a prominent, potentially large type logo over an image, indicating a strong visual statement at the top. Sections exhibit a consistent vertical rhythm, with content blocks often appearing as clean, unbordered units or subtly bordered cards. Content is likely arranged in single or two-column structures for readability, avoiding complex multi-column grids except for potentially feature displays. Navigation is a sticky top bar, providing persistent access. The overall density is compact, making efficient use of vertical space with clear, but not exaggerated, separation between content blocks.

## Imagery

Imagery is minimal, focusing on large, uncropped photographs that serve as background elements or as distinct visual breaks. The treatment appears raw, without heavy masking or stylized effects, often presenting architectural or urban scenes. Icons, if present, are likely minimal, outlined, and monochromatic, aligning with the clean UI. The overall density suggests a text-dominant layout where images support the content rather than defining it. When images are used, they are typically large and used sparingly. The provided image shows realistic imagery with normal color treatment, not desaturated or highly stylized.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(0, 0, 0, 0.2) 4px 2px 4px 0px |
| Button | rgba(0, 0, 0, 0.2) 4px 2px 4px 0px |
| Navigation | rgba(0, 0, 0, 0.2) 4px 2px 4px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| The New York Times (NYT) | Prominent use of high-contrast black and white, distinctive serif and sans-serif typography for academic/news content, and minimal color accents for structure and links. |
| Architectural Digest | Heavy reliance on large, impactful imagery combined with clean, structured typography and a generally monochromatic UI. |
| Monocle | A strong emphasis on editorial design principles, high-quality photography, and a conservative, functional use of color against a largely grayscale palette. |
| academic journals or university websites | A serious, text-first approach with clear information hierarchy, often using traditional typefaces and restrained graphic elements to convey authority. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #e5e5e5
accent: #bc5346
primary action: #bc5346 (outlined action border)

Example Component Prompts:
1. Create a primary navigation item: New Century Schoolbook LT Std weight 400, size 21px, lineHeight 1.0, Ink Black text #000000. Underline on hover.
2. Create a content card for a news item: Canvas White background #ffffff, 0px border-radius, no border, Ink Black text #000000 for heading (Helvetica Neue LT Pro-Md weight 400, 39px), and Helvetica Neue LT Pro-Roman weight 400, 16px, Ink Black text #000000 for body. Provide 15px bottom margin after the card.
3. Create a circular ghost button with a label 'Details': Canvas White background #ffffff, Ink Black text #000000, Subtle Gray border #e5e5e5 with 1px width, 50% border radius, 10.5px padding on all sides.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518892372-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518892372-thumb.jpg |
