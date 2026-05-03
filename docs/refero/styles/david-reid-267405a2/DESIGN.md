# David Reid — Refero Style

- Refero URL: https://styles.refero.design/style/267405a2-54c9-4f64-b350-9a2d469d1a71
- Site URL: https://www.davejreid.com
- ID: 267405a2-54c9-4f64-b350-9a2d469d1a71
- Theme: light
- Industry: design
- Created: 2026-04-30T01:52:43.512Z
- Ranks: newest: 499, popular: 1097, trending: 1073

> Photographic gallery on parchment

## Description

David Reid's site presents a stark, minimalist portfolio style. A monochromatic palette with deep charcoal text on an off-white canvas foregrounds content, reflecting a deliberate restraint. Visual hierarchy is established through a spacious, comfortable layout and a subtle interplay of fine lines and a single distinct radius. The design avoids illustrative elements, focusing instead on stark typography and photographic compositions, creating an atmosphere of quiet authority and directness.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, large content areas |
| Lead Text | #222222 | neutral | Dark borders and separators for elevated surfaces and inverted UI |
| Muted Ash | #999999 | neutral | Secondary text, descriptive captions, and subtle separators or helper text where lower prominence is desired |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Modern Era | Arial, sans-serif | 400 | 14px | 1.43 | General interface text, links, and minor labels. Its neutrality underpins the site's understated aesthetic. |
| system-ui | system-ui | 100 | 14px, 16px | 1.38, 1.43 | Used for light, almost whispered text, particularly in descriptive blocks, creating a refined contrast to the default weight and emphasizing hierarchy without bolding. |
| Italian Garamond | Garamond, serif | 400 | 16px | 1.25, 1.38 | Decorative usage for specific textual elements, adding a classic, editorial touch. |
| Noto Sans TC | Noto Sans, sans-serif | 100 | 16px | 1.38 | Likely used for East Asian characters, maintaining visual consistency with the light weight of the system-ui font. |

## Spacing & Shape

```json
{
  "radius": {
    "images": "6px"
  },
  "elementGap": "20px",
  "sectionGap": "200px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Image Card with Caption

**Role:** Displays photographic work with associated descriptive text.

Images are contained within 6px rounded corners. Overlaid or adjacent descriptive text typically uses Muted Ash (#999999) on a Canvas White background. There's no explicit padding token for cards, implying a direct image-to-edge relationship within its container.

### Ghost Link Button

**Role:** Navigational elements and external links.

These are primarily text-based links (#222222) with a detected border that appears to be dynamic, possibly indicating an active or hover state. The border is a fine line of Lead Text (#222222). There is no background fill, making them lightweight and unobtrusive.

### Secondary Text Section

**Role:** Provides context and description for projects or personal information.

Uses Muted Ash (#999999) for body text, often with horizontal spacing of `20px` or `30px` for alignment. It maintains a comfortable line height, paired with `system-ui` weight 100 or `Modern Era` weight 400.

### Project Headline

**Role:** Section titles for different projects or categories.

Appears in Lead Text (#222222), possibly in a larger size for `Modern Era` or `Italian Garamond` to create visual emphasis, typically followed by a `200px` vertical gap separating it from the content below.

## Do's

- Prioritize a monochromatic palette of Canvas White (#ffffff), Lead Text (#222222), and Muted Ash (#999999) to maintain a restrained aesthetic.
- Use `Modern Era` weight 400 for primary text and links, and `system-ui` weight 100 or `Noto Sans TC` weight 100 for secondary, lighter text.
- Apply a consistent `6px` border-radius to all images to softly contain visual elements.
- Implement `20px` as the standard `elementGap` for horizontal and vertical spacing between distinct UI elements, and `200px` for `sectionGap`.
- Design interactive elements as 'ghost' components, relying on Lead Text (#222222) for borders and text, rather than filled backgrounds.
- Maintain a comfortable density with `10px` and `20px` margins for internal text blocks and `80px` for vertical content separation.

## Don'ts

- Avoid introducing additional chromatic colors beyond the established monochromatic scheme.
- Do not use heavy shadows or gradients, as the design uses minimal elevation and a flat aesthetic.
- Refrain from using strong, bold typography for headlines; lean on `system-ui` weight 100 or `Italian Garamond` weight 400 for subtle impact.
- Do not deviate from the `6px` image border-radius; all images must conform to this softening treatment.
- Avoid dense, information-packed sections; ensure generous `elementGap` and `sectionGap` for comfortable reading.
- Do not use conventional filled buttons; all calls to action should be ghost links with subtle borders or simple text.

## Layout

The page maintains a full-bleed layout for large visual sections, allowing photography to dominate the viewport, but content frequently snaps to a max-width within those sections. The hero consists of simple descriptive text followed by a large photographic grid. Content arrangement appears as two-column grids for project showcases, often alternating large imagery with explanatory text sections. Vertical rhythm is established by section gaps up to 200px, which creates significant breathing room between major content blocks. Navigation is minimal, limited to discreet text links in the header.

## Imagery

The site primarily uses high-quality photography and product screenshots. Photography is typically full-bleed or large-format, often featuring single subjects in clear, well-lit environments. Product screenshots are typically clean, showcasing digital interfaces with a focus on functionality. Images consistently use a 6px border-radius for a subtle softening effect across all visual media. Imagery serves to showcase work and provide content rather than being purely decorative, with a high density relative to text in project sections.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Similar focus on clean, spacious layouts, strong typography hierarchy, and a restrained color palette that lets content stand out. |
| Figma | Uses a similar approach to typographic clarity, functional white space, and a minimal set of interaction colors with a preference for ghost buttons and subtle borders. |
| Linear | Shares a monochromatic aesthetic with precise line work, minimalist components, and a strong emphasis on content readability over decorative elements. |
| Pitch | Employs an extensive use of white space, crisp typography, and a strategic, minimal application of color for calls to action, maintaining a premium feel. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #222222
- background: #ffffff
- border: #222222
- accent: no distinct accent color
- primary action: no distinct CTA color

Example Component Prompts:
- Create a top navigation bar: Canvas White background. Links in Lead Text (#222222) using `Modern Era` weight 400 at 14px, `letterSpacing` normal. Right-aligned ghost link buttons for 'Email', 'Read.cv', 'LinkedIn' with a Lead Text (#222222) border on hover or active states.
- Create a project image card: an image with a 6px radius. Below the image, body text in Muted Ash (#999999) using `system-ui` weight 100 at 14px, lineHeight 1.43, with an `elementGap` of `10px` from the image.
- Create a hero section introductory text: Main title in Lead Text (#222222) using `Modern Era` weight 400, followed by descriptive text in Muted Ash (#999999) using `system-ui` weight 100 at 14px, lineHeight 1.43. Ensure a `sectionGap` of 200px after this block.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513949152-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513949152-thumb.jpg |
