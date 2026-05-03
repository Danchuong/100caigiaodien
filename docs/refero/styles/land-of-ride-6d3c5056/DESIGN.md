# Land of Ride — Refero Style

- Refero URL: https://styles.refero.design/style/6d3c5056-dbb9-413b-9e9d-37183cfb97f8
- Site URL: https://www.landofride.com
- ID: 6d3c5056-dbb9-413b-9e9d-37183cfb97f8
- Theme: dark
- Industry: other
- Created: 2026-04-30T01:55:31.760Z
- Ranks: newest: 488, popular: 787, trending: 649

> Editorial adventurer's journal

## Description

Land of Ride evokes an adventurous, editorial spirit with a high-contrast dark theme punctuated by vivid, energetic accents. Typography is a rich blend of elegant serifs for headlines and navigation, grounded by clear sans-serifs for body text, creating a layered, magazine-like feel. Components are lean and functional, often using ghost styling and thin borders, allowing striking photography to take center stage. The interplay of deep blacks and sharp whites with a spectrum of dynamic colors makes interactive elements feel distinct and alive.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Page backgrounds, primary text, dark mode surfaces, text button borders |
| Canvas White | #ffffff | neutral | Content surfaces, light mode backgrounds, primary text on dark, ghost button borders |
| Ash Gray | #f5f5f5 | neutral | Subtle background for content sections, ghost button backgrounds |
| Ghostly Mist | #eee7e7 | neutral | Muted secondary text, subtle accent on dark backgrounds |
| Placeholder Gray | #767676 | neutral | Input placeholder text, inactive elements |
| Flamingo Pink | #ffc2f7 | accent | Decorative heading accents, striking visual highlights on dark UI |
| Sunset Orange | #ec542d | semantic | Badge accents, error states, attention-grabbing headings |
| Goldenrod | #ebb70b | accent | Highlight elements, icon accents |
| Passion Red | #fe5c5d | accent | Decorative heading accents, secondary calls to attention |
| Blaze Orange | #f77408 | accent | Decorative heading accents, vivid callouts |
| Ocean Blue | #0b50b8 | accent | Decorative heading accents |
| Forest Sage | #8c988b | accent | Decorative heading accents, earthy visual elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times | Times New Roman | 400 | 16px | 1.00 | Foundational text for general content, navigation links, and subtle details. Its classic serif evokes a print aesthetic. |
| GaramondNarrow | Garamond | 100, 300, 400 | 16px, 18px, 20px, 22px, 24px, 48px, 60px, 72px | 1.00, 1.10, 1.20, 1.40 | Used for headlines and subheadings, offering an elegant, condensed serif contrast to the body text. Its range of weights and sizes provides clear hierarchy and visual appeal. |
| FranklinGothicCondensed | Franklin Gothic Condensed | 400, 500, 600 | 14px, 16px, 20px, 22px | 1.00 | A workhorse sans-serif for body text, badges, and smaller headings. The condensed form maintains efficiency while the slight negative letter-spacing keeps it compact and legible. |
| FranklinGothic | Franklin Gothic | 400, 500, 600 | 13px, 14px, 15px, 16px | 1.00, 1.20 | Used for input fields, navigation, and detailed body content. Its straightforward sans-serif form ensures clarity for functional elements. |
| GaramondCondensed | Garamond | 400 | 18px, 19px, 20px, 23px, 29px | 0.90, 1.00 | Introduces visual variation for navigation and body text, maintaining a refined serif character at smaller sizes. |
| Sequel | Neue Haas Grotesk Display | 400 | 24px, 30px, 59px, 77px | 0.80, 1.00 | Used for larger headings and calls to action, providing a distinctive display sans-serif with tighter tracking for impact. The generous line height complements its scale. |
| Garamond | Garamond Premier Pro | 500 | 88px, 92px, 154px | 1.00 | Dominant display serif for hero headlines, commanding attention with classic elegance. |
| Kabel | Kabel Std | 400 | 48px, 79px, 92px | 0.80, 0.90 | A geometric sans-serif for striking headings, offering a modernist contrast to the serifs. Its tight tracking enhances its presence. |
| LookingGlass | Didot | 300, 400 | 46px, 92px | 0.90 | Highly stylized, condensed serif for exceptional display headings, providing a unique personality through extremely tight letter spacing and a slender visual profile. |
| CheapsMan | Abril Display | 400 | 92px | 1.00 | Distinctive display font for specific, impactful headings, leveraging a unique character for brand moments. |
| Amarante | Playfair Display | 300 | 46px, 92px | 1.00 | Elegant display font for prominent headings, chosen for its delicate yet assertive presence. |
| VeryPopular | Source Serif Pro | 400 | 88px | 1.80 | Display font used for large, isolated text, with ample line height to suggest generosity and openness. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.2 |  |
| body | 16 | 1 | 0.16 |
| subheading | 22 | 1 | -0.44 |
| heading-sm | 24 | 1.1 | 0.24 |
| heading | 48 | 0.9 | -1.44 |
| heading-lg | 77 | 0.8 | -2.31 |
| display | 154 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "nav": "3px",
    "other": "3px",
    "inputs": "0px",
    "buttons": "0px"
  },
  "elementGap": "22px",
  "sectionGap": "115px",
  "cardPadding": "29px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button Inverse

**Role:** Primary action button on dark backgrounds

Background transparent, text 'Canvas White' (#ffffff), border 'Canvas White' (#ffffff), 0px radius, 0px padding.

### Ghost Button Default

**Role:** Primary action button on light backgrounds

Background transparent, text 'Midnight Ink' (#000000), border 'Midnight Ink' (#000000), 0px radius, 0px padding.

### Pill Button Light

**Role:** Secondary action button for filtering or specific selections

Background 'Ash Gray' (#f5f5f5), text 'Midnight Ink' (#000000), 50% border radius (effectively pill-shaped), 0px padding. Used for categorical choices.

### Standard Input Light

**Role:** Text input field on light backgrounds

Background transparent, text 'Midnight Ink' (#000000), bottom border 'Midnight Ink' (#000000), 0px radius, 8px vertical padding. Placeholder text uses 'Placeholder Gray' (#767676).

### Standard Input Dark

**Role:** Text input field on dark backgrounds

Background transparent, text 'Canvas White' (#ffffff), bottom border 'Canvas White' (#ffffff), 0px radius, 8px vertical padding.

### Filled Input Light

**Role:** Text input field with clear background on light themes

Background 'Canvas White' (#ffffff), text 'Midnight Ink' (#000000), border 'Placeholder Gray' (#767676), 0px radius, 0px padding.

### Accent Badge

**Role:** Highlighting tags or categories

Background transparent, text 'Sunset Orange' (#ec542d), 0px radius, 0px padding. Used for short, informative labels.

## Do's

- Prioritize photography as the leading visual element, treating text as an overlay or complementary detail.
- Use 'Midnight Ink' (#000000) for distinct section backgrounds to create high contrast with 'Canvas White' (#ffffff) content.
- Apply 'Garamond' or 'Sequel' for large, impactful headlines, ensuring generous vertical spacing around them.
- Utilize ghost buttons with either 'Midnight Ink' (#000000) or 'Canvas White' (#ffffff) borders and text for all primary actions.
- Employ the 'Sunset Orange' (#ec542d) for badges and error states to bring a consistent, vivid call to attention.
- Maintain a 0px border radius for most interactive elements and inputs, preserving a crisp, structured aesthetic.
- Use 'Ash Gray' (#f5f5f5) as a subtle background distinction for secondary content blocks within light themes.

## Don'ts

- Avoid using filled primary buttons; stick to ghost outlines to keep attention on imagery and content.
- Do not introduce additional decorative gradients; the system relies on solid colors and high-contrast photography.
- Refrain from using strong shadows on general elements; reserve for subtle elevation of navigation or specific actions.
- Do not clump content; prioritize generous 'elementGap' (22px) and 'sectionGap' (115px) for a spacious feel.
- Avoid mixing display fonts excessively on a single screen; ensure a clear hierarchy with 1-2 primary display choices and 1-2 functional families.
- Do not use highly saturated colors for large text blocks; they are reserved for accents and small functional elements.
- Never compromise on high text contrast; always ensure 'Midnight Ink' (#000000) on 'Canvas White' (#ffffff) or vice versa for optimal readability.

## Layout

The page primarily uses a full-bleed layout for hero sections, often with captivating imagery. Content sections are typically max-width constrained, creating a focused reading area on wide screens, but the overall page model uses both full-bleed and contained sections fluidly. The hero pattern displays a large image with text overlaid at the center. Section rhythm alternates between text-dominant blocks and image-heavy showcases. Content is often arranged in grid formats for community content, typically 3-4 columns of image-text pairs. A standard top navigation bar (often transparent over the hero, then sticky) is present, with secondary navigation sometimes appearing as stacked links. The layout is spacious, with considerable breathing room between elements and sections.

## Imagery

The site uses high-quality, full-bleed photography featuring extreme sports (surf, ski, snowboard, motorbike) and vast landscapes. Images are often raw and natural, with vibrant colors emphasizing the adventure. They serve as atmospheric backdrops and aspirational content rather than product showcases. There's a strong focus on action shots and scenic views. Icons, when present, are minimal and conceptual, lacking distinct stroke weight in the provided context (no specific icon data). The density is image-heavy, with photography often occupying large viewport areas, creating an immersive experience.

## Elevation

| Element | Style |
| --- | --- |
| Navigation Bar | rgba(0, 0, 0, 0.25) 0px 4px 10px 0px |
| Button Shadow | rgba(0, 0, 0, 0.32) 3px 3px 8px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Open Space | Shares a similar editorial aesthetic with strong photography, minimal UI, and a focus on content over heavy componentry. |
| Airbnb | Uses large, immersive imagery in hero sections and throughout content to convey travel and experience, much like Land of Ride's emphasis on adventurous destinations. |
| VSCO | Exhibits a clean, photography-driven UI with high-contrast text and a minimalist approach to interactive elements, letting visuals dominate. |
| The New York Times (digital) | Employs an editorial serif-heavy typography blending classic elegance with modern readability, akin to Land of Ride's mixed font strategy. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #000000
border: #000000
accent: #ffc2f7
primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section: full-bleed image with an overlay. Headline 'Your Next Ride' in Garamond 92px, weight 500, #ffffff. Subtitle 'Discover new horizons' in Times 16px, weight 400, #ffffff. A ghost button below: background transparent, text 'Explore Adventures' #ffffff, border #ffffff, 0px radius, 0px padding.
2. Create a content card for 'Community': Background 'Canvas White' (#ffffff), 3px radius. Body text 'Previously riding' in GaramondNarrow 22px, weight 400, #000000. Underneath, a smaller text 'KYRGYZSTAN 2022' in FranklinGothicCondensed 14px, weight 400, #000000. Add a small 'Accent Badge' with text '#travelresolutions' in 'Sunset Orange' (#ec542d).
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514101794-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514101794-thumb.jpg |
