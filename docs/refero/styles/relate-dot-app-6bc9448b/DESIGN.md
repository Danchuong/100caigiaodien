# Relate dot App — Refero Style

- Refero URL: https://styles.refero.design/style/6bc9448b-5d39-4aba-9007-25c7a2aedbad
- Site URL: https://relate.app
- ID: 6bc9448b-5d39-4aba-9007-25c7a2aedbad
- Theme: light
- Industry: other
- Created: 2026-04-30T03:34:55.107Z
- Ranks: newest: 122, popular: 1253, trending: 1257

> Utility-first information panels with minimal fuss.

## Description

This design system presents domain names with a direct, unembellished style, leveraging high-contrast typography against simple, almost utility-like white panels. Information is segmented into cards with subtle borders rather than heavy visual separation. The overall impression is one of efficiency and clarity, with information delivered plainly without decorative flourishes. A vibrant yet functional blue or green is reserved for links or indicators to guide attention, while the majority of the interface remains in a monochrome palette.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, default surface color, text backgrounds within content blocks |
| Ink Text | #444444 | neutral | Primary body text, general darker text elements |
| Deep Text | #222222 | neutral | Headings, strong text, and significant labels |
| Graphite Accent | #000000 | neutral | Key headings, icons, strong outlines – acts as a prominent accent within the monochrome scale |
| Ghost Gray | #eeeeee | neutral | Subtle borders, inactive text, ghost button outlines. Offers a soft differentiation from Canvas White |
| Success Green | #7bd428 | accent | Green outline accent for tags, dividers, and focused UI edges |
| Action Blue | #2484f2 | accent | Outlined action borders for links and interactive elements, providing a clear visual cue for clickable items. Represents the primary interactive color |
| Link Blue | #2374c4 | accent | Text color for interactive text links, a slightly darker shade of Action Blue for distinction |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roboto | system-ui | 400, 700 | 14px, 16px, 18px | 1.20, 1.31 | General body text, subheadings, links, and various informational labels. Its legibility supports the direct communication style. |
| Georgia | serif | 400 | 16px | 1.20 | Used for specific body text elements, likely for readability within longer content blocks. |
| Proxima Nova | Montserrat | 300, 400, 500, 800 | 17px, 20px, 21px, 22px, 31px, 33px | 1.20, 1.21, 1.41 | Headlines and prominent text elements, offering a sharp, modern alternative to system fonts. Its range of weights allows for distinct hierarchy. |
| Arial | system-ui | 400 | 14px, 18px | 1.33, 1.36, 1.67 | An accessible font for supplementary information and smaller textual components. |
| Proxima Nova Condensed | Oswald Bold | 400 |  |  | Large, impactful display headlines, communicating authority with its condensed, bold appearance. |
| Source Sans Pro | system-ui | 400 | 18px | 1.20 | Used for specific body text, possibly for callouts or emphasized paragraphs. |
| proximacapsbold |  | 400 | 46px | 1.2 | proximacapsbold — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.31 |  |
| body-sm | 16 | 1.31 |  |
| body | 18 | 1.31 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "36px",
  "cardPadding": "15px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Buy Now Button

**Role:** Primary action button for purchasing domains.

Transparent background, 'Ink Text' color for text. Features a 0px border radius, aligning with the stark, utilitarian aesthetic. Text uses 'Roboto' at 16px, 400 weight.

### Information Card with Buy Now Button

**Role:** Contains domain details and purchase options.

White background, with a 2px solid border using 'Ghost Gray' or 'Ink Text'. Padding of 15px is applied. Includes a 'Ghost Buy Now Button' and descriptive text in Ink Text or Deep Text.

### GoDaddy Secure Transaction Label

**Role:** Indicates secure purchasing.

Text in 'Ink Text' using 'Roboto' font at 14px, 400 weight, with small 'GoDaddy' icon. No distinct background or border, integrated into surrounding content.

### Learn More Link

**Role:** Secondary action for more information.

Text in 'Link Blue' using 'Roboto' at 14px or 16px, 400 weight. No explicit background, often appears within larger text blocks.

### Highlighted Status Tag

**Role:** Draws attention to key status like 'Available!' or 'Extra:'.

Text in 'Success Green' using 'Roboto' at various smaller sizes, 400 weight. No distinct background or border, visually integrated to highlight specific words.

## Do's

- Use 'Canvas White' (#ffffff) as the default background for all primary content areas and surfaces to maintain a bright, uncluttered base.
- Employ 'Ink Text' (#444444) for most body text and secondary information, ensuring high readability against light backgrounds.
- Emphasize headlines and critical labels with 'Deep Text' (#222222) or 'Graphite Accent' (#000000) for strong visual hierarchy.
- Reserve 'Action Blue' (#2484f2) for borders of interactive elements and 'Link Blue' (#2374c4) for link text, making interactive elements immediately recognizable.
- Apply a 0px border radius to all components including buttons and cards for a sharp, unrounded aesthetic.
- Maintain a clear visual hierarchy using 'Proxima Nova' weights for headings: 800 for main titles, 500 for subheadings, and 400 for smaller headings.
- Incorporate `36px` as the base `sectionGap` for consistent vertical rhythm between distinct content blocks.

## Don'ts

- Do not introduce rounded corners or border radii greater than 0px on any interface elements.
- Avoid using saturated background colors or heavy gradient fills for primary content areas; surfaces should remain neutral and flat.
- Do not use shadows or excessive elevation that would make components appear to float; maintain a flat, panel-like appearance with subtle borders.
- Do not deviate from the specified font families and weights; maintain the established typographical voice across all content.
- Refrain from adding decorative imagery or complex illustrations; the system prioritizes direct communication through text and simple UI elements.
- Do not use 'Success Green' (#7bd428) as a background for buttons or primary actions; it is reserved for highlighting status only.

## Layout

The page exhibits a full-bleed grid layout for its background imagery, allowing diverse headshots to extend to the viewport edges. Foreground content is contained within white, high-contrast panels, which appear to float above this background. The hero section features a prominent domain name with a descriptive tagline centered over the background mosaic. Content sections below are primarily information-driven, arranged in vertically stacked white cards with consistent vertical spacing (likely `36px`) and minimal horizontal offsets. There is no strict alternating light/dark band pattern, as the content panels are consistently white, while the background shifts color depending on the image beneath. Navigation is a simple top bar, distinct from the main content flow.

## Imagery

The site primarily uses diverse headshot photography, cropped tightly and arranged in a grid-like mosaic, serving as a decorative background rather than explanatory content. These images are raw, unedited, and serve no direct product purpose, existing as a visually engaging counterpoint to the stark UI. There are no illustrations, product screenshots, or abstract graphics. Icons are minimal, likely monochrome, used functionally for status (e.g., GoDaddy logo), rather than decoratively. The density is image-heavy in the background, text-dominant in the foreground content panels.

## Custom Sections

### Agent Prompt Guide

primary action: #2484f2 (outlined action border)
Create an Outlined Primary Action: Transparent background, #2484f2 border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520076347-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520076347-thumb.jpg |
